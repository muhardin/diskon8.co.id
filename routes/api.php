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

Route::get('/products', 'ApiController@products');
Route::get('/dashboard', 'ApiController@dashboard');
Route::post('/productadd', 'ApiController@productadd');
Route::post('/productupdate', 'ApiController@productupdate');
Route::get('/productstatus/{id}', 'ApiController@productstatus');
Route::post('/gajian', 'ApiController@gajian');
Route::post('/gajianpost', 'ApiController@gajianpost');
Route::post('/smscode', 'ApiController@smscode');
Route::post('/resetdesc', 'ApiController@resetdesc');
Route::post('/updatepassword', 'ApiController@updatepassword');
Route::post('/updateprofile', 'ApiController@updateprofile');
Route::post('/updatebank', 'ApiController@updatebank');

Route::post('/profiletoko', 'ApiController@profiletoko');

Route::get('/dashboard/summary', 'ApiController@summary');
Route::post('/updatefooterhome', 'ApiController@updatefooterhome');
Route::post('/updatefooterdetail', 'ApiController@updatefooterdetail');


