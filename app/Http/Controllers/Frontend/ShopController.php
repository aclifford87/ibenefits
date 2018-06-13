<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Products;

class ShopController extends Controller
{
    function shop(){
        //get all products and services
        return view('frontend.shop.products');
    }

    function product(){

        return view('frontend.shop.product');
    }
}
