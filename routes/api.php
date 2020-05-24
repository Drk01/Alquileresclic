<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('blockuser/{id}', 'UserController@userBlocker')->name('blockUser');

Route::post('changerole/{id}', 'UserController@userRoleChanger')->name('userRoleChanger');

Route::put('saveEditedCategory/{id}', 'CategoriesController@saveEditedCategory')->name('saveEditedCategory');

Route::delete('deleteCategory/{id}', 'CategoriesController@deleteCategory')->name('deleteCategory');

Route::post('saveProfile/{id}', 'ProfileController@saveProfileChanges')->name('saveProfileChanges');

Route::get('getMainCategories', 'CategoriesController@getMainCategories')->name('getMainCategories');
