<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Shop\Products;
use Gloudemans\Shoppingcart\Facades\Cart;

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

    function add_cart(){
        Cart::add('293ad', 'Product 1', 1, 9.99);
        Cart::store(Auth::user()->email);
        return Cart::tax();
        return Cart::content();
    }

    function cart(){
        return view('frontend.shop.cart');
    }
}
