<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// CATEGORY CONTROLLERS
Route::resource('occupational-health','OccupationalHealthController');
Route::resource('insurance','InsuranceController');
Route::resource('music-app','MusicAppController');
Route::resource('online-training','OnlineTrainingController');

Route::get('all/products', function () {
    return ['data' => \App\Models\Shop\OccupationalHealth::all()];
});
Route::get('all/insurance', function () {
    return ['data' => \App\Models\Shop\Insurance::all()];
});
Route::get('all/music-app', function () {
    return ['data' => \App\Models\Shop\MusicApp::all()];
});
Route::get('all/online-training', function () {
    return ['data' => \App\Models\Shop\OnlineTraining::all()];
});