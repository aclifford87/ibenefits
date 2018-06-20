<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Shop\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Spatie\Html\Elements\Input;

class ShopController extends Controller
{
    function index(){
        //get all products and services
        $products = Products::where('visible', 1)->get();
        return view('frontend.shop.index', compact('products'));
    }

    function product($id){
        $product = Products::findOrFail($id);
        return view('frontend.shop.product', compact('product'));
    }

    function add_cart(Request $request){
        $product = Products::where('name', $request->input('name'))->get();
        $image_url = "";
        $id = "";
        foreach ($product as $prod){
            $image_url = $prod->image_url;
            $id = $prod->id;
        };
        $qty = (int)$request->input('quantity');
        $price = (int)$request->input('price');
        Cart::add($request->input('name'), $request->input('name'), $qty , $price,
            ['image_url' => $image_url, 'product_id' => $id]);
        //return Cart::content();
        return redirect(route('frontend.cart'));
    }

    function remove_from_cart($rowId){
        Cart::remove($rowId);
        return redirect()->back()->withFlashSuccess('The product was successfully edited.');
    }

    function cart(){
        return view('frontend.shop.cart');
    }
}
