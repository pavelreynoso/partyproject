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
    return view('pages.index');
})->name('index');

Route::get('/en', function() {
    return view('en.index');
})->name('EnglishIndex');

Route::get('/login', 'Auth\LoginController@showLogin')->name('userLogin');
//Route::get('/en/login','Auth\LoginController@showEnLog')->name('enLogin');

Route::get('/register', 'ClientController@register')->name('clientRegister');

Route::get('affiliates/', function(){
    return view('pages.users.providers.100');
})->name('affiliates.100');

Route::namespace('Affiliates')->prefix('affiliates')->middleware(['auth', 'auth.provider'])->name('affiliates.')->group(function(){
    Route::resource('r101', 'ProviderDetailsController');
    Route::resource('r201', 'ProductController');
    Route::resource('r205','ComplianceController');
    Route::resource('r212', 'ContactController');
    Route::resource('r302', 'StockController');
    Route::resource('controlpanel', 'DashboardController');
});


Route::get('/', 'DashboardController@index')->name('index');

Route::get('/places', 'ProductController@index')->name('products');
Route::get('/places/product', 'ProductController@product_details')->name('product_details');
///Aquí se pondrá el id del producto en /product.

Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')->name('activate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/provider', function(){
    return 'You are a Provider';
})->middleware(['auth', 'auth.provider']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except'=> ['show', 'create', 'store']]);
});

