<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


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

        If(Input::hasFile('image')){
            $file = Input::file('image');
            $destinationPath = '/product_images/';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product = Products::create([
                'image_url' => $destinationPath . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
            ]);
        } else{
            Products::create($request->all());
        }



    }
}
