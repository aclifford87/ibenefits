<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Shop\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Shop\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;



class ShopController extends Controller
{
    function index(){
        //get all products and services
        $products = Products::where('visible', 1)->get();

        //return count($products);
        return view('frontend.shop.index', compact('products'));
    }

    function product($id){
        $product = Products::findOrFail($id);
        return view('frontend.shop.product', compact('product'));
    }

    function insurance($id){
        $product = Insurance::findOrFail($id);
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

    function update(Request $request){

        Cart::update($request->input('rowId'), $request->input('qty'));
        return redirect()->back();
    }

    function checkout(){
        if(Auth::check()){
            // Cart::store(auth()->id());
            // IF BALANCE IS MORE THAN CART THEN:->
            // MAIL BOTH ADMIN AND CUSTOMER WITH THE ORDER
            // THEN RETURN BACK WITH MESSAGE
            return Cart::content();
        } else{
            return redirect()->back()->withFlashDanger('Please login to purchase items.');
        }

    }

    function cashout(Request $request){
        $cashout = $request->input('cashout');
        $user = Auth::user();
        $user_array = Auth::user()->toArray();
        $balance = Auth::user()->balance;
        if($cashout > $balance){
            return redirect()->back()->withFlashDanger('You only have £'. $balance . ' in your account.');
        }
        $new_balance = $balance - $cashout;
        $user->update(['balance' => $new_balance]);
        // SEND EMAIL
        Mail::raw($user->first_name . ' ' . $user->last_name .
             ' has requested £' . $cashout . ' cash out.', function($message) use ($user)
        {
            $message->subject('Cash Back!');
            $message->from($user->email, 'iBenefits Shop');
            $message->to('nick.ashford@growthpartnersplc.co.uk');
        });
        return redirect()->back()->withFlashSuccess('Your request has been emailed.');
    }

}
