<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Products;
use Illuminate\Http\Request;


/**
 * Class DashboardController.
 */
class ProductsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.products.index');
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('avatar')->store('avatars');

        return $path;
        return $request;
    }
}
