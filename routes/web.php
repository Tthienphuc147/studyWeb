<?php

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

Route::get('/','homeController@showHome');
Route::get('/lophoc/{id}','LopHocController@show');
Route::get('/baihoc/{id}/{id1}','baihocController@show');
Route::get('/ctbaihoc/{id}','chitietbaihocController@show');
Route::post('/check/{id}/{idb}','chitietbaihocController@check');
