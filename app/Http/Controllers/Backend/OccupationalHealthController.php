<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop\OccupationalHealth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


/**
 * Class DashboardController.
 */
class OccupationalHealthController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.occupational_health.index');
    }

    public function create()
    {
        return view('backend.occupational_health.create');
    }

    public function edit($id)
    {
        $product = OccupationalHealth::findOrFail($id);
        return view('backend.occupational_health.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = OccupationalHealth::find($id);
        If(Input::hasFile('image_url')) {
            $file = Input::file('image_url');
            $destinationPath = 'product_images';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product->update([
                'image_url' => '/' . $destinationPath . '/' . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
            ]);
        } else{
            $input = $request->except('image_url');
            $product->update($input);
        }
        return redirect(route('admin.occupational-health.index'))->withFlashSuccess('The product was successfully edited.');

    }

    public function store(Request $request)
    {
        If(Input::hasFile('image')){
            $file = Input::file('image');
            $destinationPath = 'product_images';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

            $product = OccupationalHealth::create([
                'image_url' => '/' . $destinationPath . '/' . $filename,
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'visible' => $request->input('visible'),
            ]);
        } else{
            OccupationalHealth::create($request->all());
        }
        return redirect(route('admin.occupational-health.index'))->withFlashSuccess('The product was successfully added.');
    }

    function destroy($id){
        $product = OccupationalHealth::findOrFail($id);
        $product->delete();
        return redirect(route('admin.occupational-health.index'))->withFlashSuccess('The product was successfully deleted.');
    }
}
