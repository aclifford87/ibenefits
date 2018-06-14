<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('products', 'ProductsController@index')->name('products');
//Route::get('products/create', 'ProductsController@create')->name('addProduct');
//Route::post('products/create', 'ProductsController@store')->name('storeProduct');
//Route::get('products/{id}/edit', 'ProductsController@edit')->name('editProduct');
//Route::patch('products/update/{id}', 'ProductsController@update')->name('updateProduct');
Route::resource('products','ProductsController');

Route::get('all/products', function () {
    return ['data' => \App\Models\Shop\Products::all()];
});