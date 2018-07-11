<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// CATEGORIES CONTROLLERS
Route::resource('occupational-health','OccupationalHealthController');
Route::resource('insurance','InsuranceController');
Route::resource('music-app','MusicAppController');

Route::get('all/products', function () {
    return ['data' => \App\Models\Shop\OccupationalHealth::all()];
});
Route::get('all/insurance', function () {
    return ['data' => \App\Models\Shop\Insurance::all()];
});