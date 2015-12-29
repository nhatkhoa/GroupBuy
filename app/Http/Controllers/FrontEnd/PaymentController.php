<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Deal;
use Cartalyst\Converter\Converter;
use danielme85\CConverter\Currency;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;
use Intervention\Image\Exception\NotFoundException;
use Netshell\Paypal\Facades\Paypal;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class PaymentController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        $this->_apiContext = Paypal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));

    }

    public function getCheckout()
    {
        return view('frontend.paypal.paypal')
            ->with('categories', Category::all());
    }

    public function postCheckout()
    {
        $payer = PayPal::Payer();
        $payer->setPaymentMethod('paypal');

        $amount = PayPal:: Amount();
        $amount->setCurrency('USD');
        $amount->setTotal((intval(\Cart::getTotal())/20)); // This is the simple way,
        // you can alternatively describe everything in the order separately;
        // Reference the PayPal PHP REST SDK for details.

        $transaction = PayPal::Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Thanh Toán Mua Hàng Từ Couponia?');

        $redirectUrls = PayPal::RedirectUrls();
        $redirectUrls->setReturnUrl(\Redirect::getUrlGenerator()->route('paypal-done'));
        $redirectUrls->setCancelUrl(\Redirect::getUrlGenerator()->route('paypal'));

        $payment = PayPal::Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));

        $response = $payment->create($this->_apiContext);
        $redirectUrl = $response->links[1]->href;

        return \Redirect::to($redirectUrl);
    }

    public function getDone(Request $request)
    {
        $id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        $payment = PayPal::getById($id, $this->_apiContext);

        $paymentExecution = PayPal::PaymentExecution();

        $paymentExecution->setPayerId($payer_id);
        $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

        \Cart::clear();

        return view('frontend.checkout.done')
            ->with('categories', Category::all())
            ->with('pay', $executePayment);
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        return view('checkout.cancel');
    }
}
