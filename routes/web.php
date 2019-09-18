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
/*
Route::namespace('Affiliates')->prefix('affiliates')->middleware(['auth', 'auth.provider'])->name('affiliates.')->group(function(){
    Route::get('/', 'RegisterController@register100')->name('100');
    Route::get('101', 'RegisterController@register101')->name('101');
    Route::get('200', 'RegisterController@register200')->name('200');
    Route::resource('/201', 'Register201Controller');
    Route::get('/202', 'RegisterController@register202')->('202');
    Route::get('/205', 'RegisterController@register205')->name('205');
    Route::get('/206', 'RegisterController@register206')->name('206');
    Route::get('/207', 'AvailabilityController@index')->name('207');
    Route::post('/207','AvailabilityController@add')->name('207.add');
    Route::get('/208', 'RegisterController@register208')->name('208');
    Route::get('/209', 'RegisterController@register209')->name('209');
    Route::get('/210', 'RegisterController@register210')->name('210');
    Route::get('/211', 'RegisterController@register211')->name('211');
    Route::get('/212', 'RegisterController@register212')->name('212');
    Route::get('/213', 'RegisterController@register213')->name('213');
    Route::get('/214', 'RegisterController@register214')->name('214');
    Route::get('/301', 'RegisterController@register301')->name('301');
    Route::get('/302', 'RegisterController@register302')->name('302');
    Route::get('/303', 'RegisterController@register303')->name('303');
    Route::get('/controlpanel', 'DashboardController@index')->name('controlpanel');
});
*/

Route::namespace('Affiliates')->prefix('affiliates')->middleware(['auth', 'auth.provider'])->name('affiliates.')->group(function(){
    Route::get('/', 'RegisterController@register100')->name('100');
    Route::resource('r101', 'Register101Controller');
    Route::resource('r201', 'Register201Controller');
    Route::resource('r205','Register205Controller');
    Route::resource('r211','Register205Controller');
    Route::get('/212', 'RegisterController@register212')->name('212');
    Route::get('/213', 'RegisterController@register213')->name('213');
    Route::get('/302', 'RegisterController@register302')->name('302');
    Route::get('/controlpanel', 'DashboardController@index')->name('controlpanel');
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

