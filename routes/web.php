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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('user', 'UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user/store','UserController@store')->name('user.store');
    Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
    Route::post('user/update','UserController@update')->name('user.update');
    Route::post('user/password','UserController@password')->name('user.password');
    Route::get('user/delete/{id}','UserController@delete')->name('user.delete');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
