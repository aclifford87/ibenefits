<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');

    Route::get('shop', 'ShopController@index')->name('shopIndex');
<<<<<<< HEAD
    Route::get('shop/product', 'ShopController@product')->name('product');
    Route::get('shop/cart', 'ShopController@product')->name('cart');

=======
    //Route::get('shop/product', 'ShopController@product')->name('product');
    Route::get('shop/product/{id}', 'ShopController@product')->name('product');
    Route::get('shop/product/cart/add', 'ShopController@add_cart')->name('add_cart');
>>>>>>> nick
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});
