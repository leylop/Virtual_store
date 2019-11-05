<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('users','UserController');
Route::apiResource('providers','ProviderController');
Route::get('products','ProductController@getAll')->name('getAllProduct');
Route::post('products','ProductController@add')->name('addProduct');
Route::get('products/{id}','ProductController@get')->name('getProduct');
Route::apiResource('orders','OrderController');

