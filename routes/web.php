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

Route::get('/register', 'ClientController@register');
Route::get('/affilliates', 'ProviderController@register1')->name('provider_register');
Route::get('/affilliates', 'ProviderController@register21');
Route::get('/affilliates', 'ProviderController@register22');
Route::get('/affilliates', 'ProviderController@register31');
Route::get('/affilliates', 'ProviderController@register32');

Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/', 'DashboardController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/places/product', 'ProductController@product_details')->name('product_details');
///Aquí se pondrá el id del producto en /product.

Route::get('/places', 'ProductController@index')->name('products');
Auth::routes();
