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

Route::get('users', 'Api\UserController@index');
Route::get('user-detail/{id}', 'Api\UserController@show');
Route::get('user-detail/edit/{id}', 'Api\UserController@edit');
Route::put('user-detail/edit/{id}', 'Api\UserController@update');
Route::delete('user-detail/{id}', 'Api\UserController@delete');


Route::get('products', 'Api\ProductController@index');
Route::get('product-detail/{id}', 'Api\ProductController@show');
Route::get('product-detail/edit/{id}', 'Api\ProductController@edit');
Route::put('product-detail/edit/{id}', 'Api\ProductController@update');
Route::delete('product-detail/{id}', 'Api\ProductController@destroy');
/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */
