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

Auth::routes();

// homepage
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// admin page
Route::group(['middleware' => 'admin'], function () {
    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user/store','UserController@store')->name('user.store');
    Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
    Route::post('user/update','UserController@update')->name('user.update');
    Route::post('user/password','UserController@password')->name('user.password');
    Route::get('user/delete/{id}','UserController@delete')->name('user.delete');

    Route::get('marketplace/create', 'MarketplaceController@create')->name('marketplace.create');
    Route::post('marketplace/store','MarketplaceController@store')->name('marketplace.store');
    Route::get('marketplace/edit/{id}','MarketplaceController@edit')->name('marketplace.edit');
    Route::post('marketplace/update/{id}','MarketplaceController@update')->name('marketplace.update');
    Route::get('marketplace/delete/{id}','MarketplaceController@delete')->name('marketplace.delete');

    Route::get('data_tanaman/create', 'DataTanamanController@create')->name('data_tanaman.create');
    Route::post('data_tanaman/store','DataTanamanController@store')->name('data_tanaman.store');
    Route::get('data_tanaman/edit/{id}','DataTanamanController@edit')->name('data_tanaman.edit');
    Route::post('data_tanaman/update/{id}','DataTanamanController@update')->name('data_tanaman.update');
    Route::get('data_tanaman/delete/{id}','DataTanamanController@delete')->name('data_tanaman.delete');
});

// profile user
Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::get('marketplace', 'MarketplaceController@index')->name('marketplace.index');
    Route::get('marketplace/show/{id}', 'MarketplaceController@show')->name('marketplace.show');
    Route::post('marketplace/cart', 'CartController@addToCart')->name('marketplace.cart');
    Route::get('marketplace/cart', 'CartController@listCart')->name('marketplace.list_cart');
    // Route::post('marketplace/cart/update', 'CartController@updateCart')->name('marketplace.update_cart');

    Route::get('data_tanaman', 'DataTanamanController@index')->name('data_tanaman.index');
    Route::get('data_tanaman/show/{id}', 'DataTanamanController@show')->name('data_tanaman.show');
});
