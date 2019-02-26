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

Route::get('/', function () {
    return view('dashboard.index');
})->name('index');

Route::get('/login', 'AuthController@showLogin');

Route::get('/register','ClientController@register');

Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/', 'DashboardController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/weddings/product', 'ClientController@product')->name('wedding.products');
Route::get('/products', function () {
    return view('dashboard.events.products');
})->name('products');
Auth::routes();
