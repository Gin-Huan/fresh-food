<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home-page');
});

Route::get('/our-product', function () {
    return view('our-product');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/news', function () {
    return view('news');
});

Route::get('/news-details', function () {
    return view('news-details');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/farming-pratice', function () {
    return view('farming-pratice');
});
Route::get('/shop', 'ProductController@index');
Route::get('/home-page', function () {
    return view('home-page');
});

Route::group(['prefix' => 'cart'],function(){
    Route::get('','CartController@index')->name('cart.index');

    Route::get('add/{id}','CartController@create')->name('cart.add');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});