<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// CATEGORIES CONTROLLERS
Route::resource('products','ProductsController');
Route::resource('insurance','InsuranceController');

Route::get('all/products', function () {
    return ['data' => \App\Models\Shop\Products::all()];
});