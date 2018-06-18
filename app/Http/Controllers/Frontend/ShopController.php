<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Products;

class ShopController extends Controller
{
    function index(){
        //get all products and services
        $products = Products::where('visible', 1)->get();
        return view('frontend.shop.index', compact('products'));
    }

    function product(){
        return view('frontend.shop.product');
    }

    function cart(){
        return view('frontend.shop.cart');
    }
}
