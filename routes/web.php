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

 /*======================================================
    Cómo pasar información a Vistas en Laravel
 ========================================================
 https://vegibit.com/how-to-pass-data-to-views-in-laravel/
 */

Route::get('/', function () {
    return view('pages.index');
})->name('index');
 /*=index in English here*/

Route::get('/en', function() {
    return view('en.index');
})->name('EnglishIndex');

Route::get('/login', 'Auth\LoginController@showLogin')->name('userLogin');
//Route::get('/en/login','Auth\LoginController@showEnLog')->name('enLogin');

Route::get('/register', 'ClientController@register')->name('clientRegister');

Route::group(['prefix' => 'affilliates'], function () {
    Route::get('/', 'ProviderController@register100')->name('100');
    Route::get('/101', 'ProviderController@register101')->name('101');
    Route::get('/200', 'ProviderController@register200')->name('200');
    Route::get('/201', 'ProviderController@register201')->name('201');
    Route::get('/202', 'ProviderController@register202')->name('202');
    Route::get('/203', 'ProviderController@register203')->name('203');
    Route::get('/204', 'ProviderController@register204')->name('204');
    Route::get('/205', 'ProviderController@register205')->name('205');
    Route::get('/206', 'ProviderController@register206')->name('206');
    Route::get('/207', 'AvailabilityController@index')->name('207');
    Route::post('/207','AvailabilityController@add')->name('207.add');
    Route::get('/208', 'ProviderController@register208')->name('208');
    Route::get('/209', 'ProviderController@register209')->name('209');
    Route::get('/210', 'ProviderController@register210')->name('210');
    Route::get('/211', 'ProviderController@register211')->name('211');
    Route::get('/212', 'ProviderController@register212')->name('212');
    Route::get('/213', 'ProviderController@register213')->name('213');
    Route::get('/214', 'ProviderController@register214')->name('214');
    Route::get('/301', 'ProviderController@register301')->name('301');
    Route::get('/302', 'ProviderController@register302')->name('302');
    Route::get('/303', 'ProviderController@register303')->name('303');
    Route::get('/controlpanel', 'ProviderController@controlpanel')->name('controlpanel');
});


Route::get('activate/{token}', 'Auth\RegisterController@activate')->name('activate');

Route::get('/', 'DashboardController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/places/product', 'ProductController@product_details')->name('product_details');
///Aquí se pondrá el id del producto en /product.

Route::get('/places', 'ProductController@index')->name('products');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return 'You are an admin';
})->middleware(['auth', 'auth.admin']);

Route::get('/provider', function(){
    return 'You are an Provider';
})->middleware(['auth', 'auth.provider']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except'=> ['show', 'create', 'store']]);
});

