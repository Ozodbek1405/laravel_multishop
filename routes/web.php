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
    return view('index');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/detail', function () {
    return view('pages.detail');
});
Route::get('/card', function () {
    return view('pages.card');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
