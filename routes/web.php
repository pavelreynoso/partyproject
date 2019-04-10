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
Route::group(['prefix' => 'affilliates'], function () {
    Route::get('/', 'ProviderController@register100')->name('100');
    Route::get('/200', 'ProviderController@register200')->name('200');
    Route::get('/201', 'ProviderController@register201')->name('201');
    Route::get('/202', 'ProviderController@register202')->name('202');
    Route::get('/203', 'ProviderController@register203')->name('203');
    Route::get('/204', 'ProviderController@register204')->name('204');
    Route::get('/205', 'ProviderController@register205')->name('205');
    Route::get('/206', 'ProviderController@register206')->name('206');
    Route::get('/207', 'ProviderController@register207')->name('207');
    Route::get('/208', 'ProviderController@register208')->name('208');
    Route::get('/209', 'ProviderController@register209')->name('209');
    Route::get('/210', 'ProviderController@register210')->name('210');
    Route::get('/211', 'ProviderController@register211')->name('211');
    Route::get('/212', 'ProviderController@register212')->name('212');
    Route::get('/301', 'ProviderController@register301')->name('301');
    Route::get('/302', 'ProviderController@register302')->name('302');
});


Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/', 'DashboardController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/places/product', 'ProductController@product_details')->name('product_details');
///Aquí se pondrá el id del producto en /product.

Route::get('/places', 'ProductController@index')->name('products');
Auth::routes();
