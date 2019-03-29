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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});

Route::get('logo/{id}', 'Logo\LogoController@show');


Route::get('/file-manager/', 'API\FileTagManager\FileTagManagerController@index');
Route::post('/file-manager/', 'API\FileTagManager\FileTagManagerController@store');


Route::get('/user','API\User\UserController@index');
Route::post('/user','API\User\UserController@store');
Route::get('/user/{id}','API\User\UserController@show');
Route::put('/user/{id}','API\User\UserController@update');
Route::delete('/user/{id}','API\User\UserController@destroy');


