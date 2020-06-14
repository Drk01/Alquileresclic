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

Route::get('/', 'FrontEndController@getIndex')->name('index');

Route::get('/anuncio/{slug}', 'FrontEndController@getAnuncio')->name('getAnuncio');

Auth::routes(['verify' => true]);



Route::group(['prefix' => 'panel'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/users', 'UserController@getListForm')->name('users');

    Route::group(['prefix' => 'ads'], function () {
        Route::get('/', 'AdController@getAdsForm')->name('ads');
        Route::get('/create', 'AdController@getCreateAdForm')->name('createAd');
        Route::get('/create/{category}', 'AdController@getAddDetailsForm')->name('addDetailsForm');

        //Ruta para mandar a moderación los anuncios.
        Route::post('/sendToModeration', 'AdController@sendToModeration')->name('sendToModeration');

        //Ruta para ver los anuncios del usuario.
        Route::get('/myAds', 'AdController@getMyAds')->name('myAds');

        //Ruta para ver anuncios favoritos.
        Route::get('/favorites', 'AdController@getMyFavorites')->name('getMyFavorites');

        // Ruta para mostrar todos los anuncios.
        Route::get('/all', 'AdController@getAllAds')->name('getAllAds');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'CategoriesController@getCategoriesList')->name('categoriesList');
        Route::get('/create', 'CategoriesController@getCreateCategoryForm')->name('createCategory');
        Route::post('/create', 'CategoriesController@postCategory')->name('postCategory');
    });

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/edit', 'ProfileController@getEditProfileForm')->name('editMyProfile');
        Route::get('/changePassword', 'ProfileController@changePassword')->name('changePassword');
        Route::post('/savePassword', 'ProfileController@savePassword')->name('savePassword');
    });

    Route::group(['prefix' => 'packages'], function () {
        Route::get('', 'PackageController@showPackageOptions')->name('showPackageOptions');
    });
});

Route::group(['prefix' => 'facebook'], function () {
    Route::get('sign-in', 'FacebookController@redirectToProvider')->name('facebookRedirectToProvider');

    Route::get('sign-in/redirect', 'FacebookController@handleProviderCallback')->name('facebookHandleProviderCallback');
});

Route::group(['prefix' => 'google'], function () {
    Route::get('sign-in', 'GoogleController@redirectToProvider')->name('googleRedirectToProvider');

    Route::get('sign-in/redirect', 'GoogleController@handleProviderCallback')->name('googleHandleProviderCallback');
});

Route::get('create-storage-link', function () {
    Artisan::call('storage:link');

    return 'done';
});
