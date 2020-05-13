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

Auth::routes(['verify' => true]);



Route::group(['prefix' => 'panel'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/users', 'UserController@getListForm')->name('users');
    Route::get('/ads', 'AdController@getAdsForm')->name('ads');
    Route::get('/newad', 'AdController@getCreateAdForm')->name('createAd');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'CategoriesController@getCategoriesList');
    });
});
