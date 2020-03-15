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
    return view('index.welcome');
});
Route::get("'\'", function () {
    return view('index.welcome');
});
Route::get('home', function () {
    return view('index.welcome');
});
Route::get('home#sc_tab_1', function () {
    return view('index.welcome');
});
Route::get('home#user-popUp', function () {
    return view('index.welcome');
})->name('login');
Route::post('log', 'Auth\LoginController@checkLogin');
Route::get('logOut', 'Auth\LoginController@logout')->middleware('auth');
Route::get('home#calculator', function () {
    return view('index.welcome');
});
Route::get('contacts', function () {
    return view('contacts');
});
Route::get('signUp', function () {
    return view('signUp');
});
Route::get('ourServices', function () {
    return view('services.ourServices');
});
Route::get('air', function () {
    return view('services.air');
});
Route::get('ocean', function () {
    return view('services.ocean');
});
Route::get('shopper', function () {
    return view('services.shopper');
});
Route::get('delivery', function () {
    return view('services.delivery');
});
Route::get('customs', function () {
    return view('customs');
});
Route::get('restricted', function () {
    return view('restricted');
});
Route::get('insurance', function () {
    return view('insurance');
});
Route::get('rates', function () {
    return view('rates');
});
Route::get('faqs', function () {
    return view('faqs');
});
Route::get('terms', function () {
    return view('terms');
});
Route::get('privacy', function () {
    return view('privacy');
});
Route::post('register', 'Auth\RegisterController@create');
Route::post('newsletter', 'NewsletterController@insert');
Route::get('registerConfirmation', function () {
    return view('registerConfirmation');
});
Route::get('account', 'AccountController@get')->middleware('auth');
Route::post('account/', 'AccountController@update')->middleware('auth');
Route::post('authUser/updated', 'AuthorizedUserController@update')->middleware('auth');
Route::get('prealert', function () {
    return view('prealert');
})->middleware('auth');
Route::get('packages', function () {
    return view('packages');
})->middleware('auth');
Route::get('invoice', 'Invoices\InvoiceController@get')->middleware('auth');
Route::get('checkOut', function () {
    return view('checkout');
})->middleware('auth');
Route::get('checkOut2', function () {
    return view('checkout2');
})->middleware('auth');
Route::get('checkOut3', function () {
    return view('checkout3');
})->middleware('auth');
