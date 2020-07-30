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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('user', 'AdminController', ['except' => ['show']]);
    Route::get('user/create','AdminController@create');
    Route::post('user/store','AdminController@store');
    Route::get('user/edit/{id}','AdminController@edit');
    Route::post('user/update','AdminController@update');
    Route::post('user/password','AdminController@password');
    Route::get('user/delete/{id}','AdminController@delete');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('post', 'PostController', ['except' => ['show']]);
    Route::get('post/create','PostController@create');
    Route::post('post/store','PostController@store');
    Route::get('post/show/{id}','PostController@show');
    Route::get('post/search','PostController@search');
    Route::get('post/edit/{id}','PostController@edit');
    Route::post('post/update','PostController@update');
    Route::get('post/delete/{id}','PostController@delete');

    Route::resource('comment', 'CommentController', ['except' => ['show']]);
    Route::post('comment/store','CommentController@store');
    Route::get('comment/edit/{id}','CommentController@edit');
    Route::post('comment/update','CommentController@update');
    Route::get('comment/delete/{id}','CommentController@delete');

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
