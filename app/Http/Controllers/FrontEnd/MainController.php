<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Customer;
use App\Model\Deal;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;
use Intervention\Image\Exception\NotFoundException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MainController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index.index')->with('categories', Category::all());
    }

    public function listProductByCategory(Request $request, $category_id)
    {
        $deals = Deal::where('category_id', $category_id)
            ->orderBy('created_at');
        $items = $deals;
        if ($request->request->get('sort') == 'price') {
            $item = $deals->orderBy('deal_price');
        }
        if ($request->request->get('sort') == 'name') {
            $item = $deals->orderBy('name');
        }
        if ($request->request->get('sort') == 'date') {
            $item = $deals->orderBy('time_expired');
        }
        return view('frontend.category.category')
            ->with('products', $items->paginate(3))
            ->with('categories', Category::all());
    }

    public function productByCategory($product_id)
    {
        $deal = Deal::where('id', $product_id)->get()->first();

        return view('frontend.product.product')
            ->with('deal', $deal)
            ->with('categories', Category::all());
    }

    public function postCart(Request $request)
    {
        return response()->json(['test' => 'ok']);
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $items = Deal::where('name', 'like', '%' . $keyword . '%');
        return view('frontend.category.category')
            ->with('products', $items->paginate(10))
            ->with('categories', Category::all());
    }

    public function addToCart($deal_id)
    {
        $amount = 1;

        if ($amount <= 0)
            throw new BadRequestHttpException('QUALITY_MUST_GREATER_THAN_0');

        $deal = Deal::find($deal_id);
        if ($deal == null) {
            throw new NotFoundException('NOT_FOUND');
        }
        if ($deal->stock < $amount) {
            throw new BadRequestHttpException('OUT_OF_STOCK');
        }
        if ($deal->time_expired < Carbon::now()) {
            throw new BadRequestHttpException('EXPIRED');
        }

        // --- Check if deal is existed in cart
        $deal_cart = \Cart::get($deal_id);
        if ($deal_cart == null) {
            \Cart::add(['id' => $deal->id, 'name' => $deal->name, 'quantity' => $amount, 'price' => $deal->deal_price,
                'attributes' => [
                    'list_price' => $deal->list_price,
                    'time_expired' => $deal->time_expired,
                    'thumb' => $deal->getThumb()
                ]]);
        } else {
            \Cart::update($deal_id, ['quantity' => $amount]);
        }

        return redirect('/gio-hang');

    }

    public function getCarts()
    {
        return view('frontend.cart.cart')
            ->with('categories', Category::all());
    }

    public function removeCart($deal_id){
        \Cart::remove($deal_id);
        return redirect('/gio-hang');
    }

    public function minusCart($deal_id){
        $cart = \Cart::get($deal_id);
        $newQuantity = --$cart->quantity;
        if($newQuantity <= 0){
            \Cart::remove($deal_id);

        }
        else{
            \Cart::update($deal_id, ['quantity' => $newQuantity]);
        }

        return redirect('/gio-hang');
    }

    public function getCheckout(){
        return view('frontend.checkout.checkout')
            ->with('categories', Category::all());
    }

    public function postCheckout(Request $request){
        \DB::beginTransaction();
        $data = $request->all();
        $data['shipped'] = false;
        $customer = Customer::create($data);
        $order = $customer->orders()->create(['quantity' => \Cart::getTotalQuantity(), 'total' => \Cart::getTotal()]);
        foreach (\Cart::getContent() as $cart) {
            $order->details()->create([
                'deal_id' => $cart->id,
                'quantity' => $cart->quantity,
                'price' => $cart->price
            ]);
        }
        $order->push();
        $customer->push();
        \DB::commit();
        \Cart::clear();
        return view('frontend.checkout.done')
            ->with('categories', Category::all());
    }
}
