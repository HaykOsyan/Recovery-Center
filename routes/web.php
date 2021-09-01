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
Route::get('/eventsingle', function () {
    return view('\frontend\eventsingle');
});
Route::get('/projects', function () {
    return view('\frontend\projects');
});
Route::get('/account', function () {
    return view('\frontend\account');
});


Route::get('/admin', function () {
    return view('\backend\admin');
});
Route::get('/admin/cover', function () {
    return view('\backend\cover');
});
Route::get('/admin/team', function () {
    return view('\backend\team');
});
Route::get('/admin/partners', function () {
    return view('\backend\partners');
});
Route::get('/admin/orders', function () {
    return view('\backend\orders');
});
Route::get('/admin/users', function () {
    return view('\backend\users');
});
Route::get('/admin/products', function () {
    return view('\backend\products');
});
Route::get('/admin/projects', function () {
    return view('\backend\projects');
});

Route::resource('categories', \App\Http\Controllers\CategoriesController::class);
Route::resource('properties', \App\Http\Controllers\PropertyItemController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
