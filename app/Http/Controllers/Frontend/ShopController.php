<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    function shop(){
        //get all products and services
        return view('frontend.shop.products');
    }
}
