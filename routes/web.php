<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group( ['middleware' => 'auth'], function()
{
    Route::get('/', 'HomeController@index')->name('home');
});
Auth::routes();

// Form advanced page
Route::get('/advanced-form', function () {
    return view('pages.advanced-form');
});

// Form basic page
Route::get('/basic-form', function () {
    return view('pages.basic-form');
});

// Form wizard page
Route::get('/wizard-form', function () {
    return view('pages.wizard-form');
});

// Datatable jquery page
Route::get('/jquery-datatable', function () {
    return view('pages.jquery-datatable');
});

// Chartjs page
Route::get('/chartjs', function () {
    return view('pages.chartjs');
});

// Morris page
Route::get('/morris', function () {
    return view('pages.morrisjs');
});
