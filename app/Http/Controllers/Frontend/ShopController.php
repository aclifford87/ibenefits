<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Products;

class ShopController extends Controller
{
    function index(){
        //get all products and services
        $products = Products::all();
        return view('frontend.shop.index', compact('products'));
    }

    function product(){
        return view('frontend.shop.product');
    }
}
