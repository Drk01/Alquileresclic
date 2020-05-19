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

    Route::group(['prefix' => 'ads'], function () {
        Route::get('/', 'AdController@getAdsForm')->name('ads');
        Route::get('/create', 'AdController@getCreateAdForm')->name('createAd');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'CategoriesController@getCategoriesList')->name('categoriesList');
        Route::get('/create', 'CategoriesController@getCreateCategoryForm')->name('createCategory');
        Route::post('/create', 'CategoriesController@postCategory')->name('postCategory');
    });

    Route::group(['prefix' => 'profile'], function () {
        
    });
});
