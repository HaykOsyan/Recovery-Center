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
Route::get('/events', function () {
    return view('\frontend\events');
});
Route::get('/product', function () {
    return view('\frontend\product');
});
Route::get('/shop', function () {
    return view('\frontend\shop');
});
Route::get('/team', function () {
    return view('\frontend\team');
});
