<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Deal;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index.index');
    }

    public function listProductByCategory(Request $request, $category_id){
        $deals = Deal::where('category_id', $category_id)
            ->orderBy('created_at');
        $items = $deals;
        if($request->request->get('sort') == 'price'){
            $item = $deals->orderBy('deal_price');
        }
        if($request->request->get('sort') == 'name'){
            $item = $deals->orderBy('name');
        }
        if($request->request->get('sort') == 'date'){
            $item = $deals->orderBy('time_expired');
        }
        return view('frontend.category.category')
            ->with('products', $items->paginate(10));
    }

    public function productByCategory($product_id){
        $deal = Deal::where('id', $product_id)->get()->first();

        return view('frontend.product.product')
            ->with('deal', $deal);
    }

    public function postCart(Request $request){
        return response()->json(['test' => 'ok']);
    }
}
