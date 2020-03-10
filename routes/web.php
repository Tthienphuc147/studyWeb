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
Route::get('/ctbaihoc/{id}/{idb}/{tinh}','chitietbaihocController@showbaichitiet');
Route::post('/check/{id}/{idb}/{tinh}','chitietbaihocController@check');
Route::get('/loginview','loginController@checklogin');
Route::post('/login','loginController@LoginAuth');
Route::get('/logout','loginController@Logout');
Route::get('/baithi/{id}','baithiController@show');
Route::post('/checkbaithi/{id}','baithiController@test');
route::get('/showranking/{id}','baithiController@showranking');
Route::resource('users','UsersController');
Route::get('users/{id}','UsersController@show');
Route::get('editprofile/{id}','UsersController@edit');
Route::get('/ranking','UsersController@showranking');

//admin
Route::get('/showadmin','AdminController@checkLogin');
Route::get('/showviewadmin','AdminController@show');
Route::get('/showadmin/logout','AdminController@LogOut');
Route::post('/showadmin/loginadmin','AdminController@LoginAuth');

//register
Route::get('/showregister','RegisterController@showRegister');
Route::post('/register','RegisterController@register');


//teacher
Route::get('/admin/teacher/list','AdminTeacherController@showList');
Route::get('/admin/teacher/addview','AdminTeacherController@showAddView');
Route::get('/admin/teacher/updateview/{id}','AdminTeacherController@showUpdateView');
Route::post('/admin/teacher/add','AdminTeacherController@add');
Route::post('/admin/teacher/update','AdminTeacherController@update');
Route::get('/admin/teacher/delete/{id}','AdminTeacherController@delete');
Route::get('/admin/teacher/viewprofile','AdminTeacherController@viewProfile');
Route::get('/admin/teacher/updateprofileview','AdminTeacherController@viewUpdateProfile');
Route::post('/admin/teacher/updateprofile','AdminTeacherController@updateProfile');
Route::get('/admin/teacher/changepasswordview','AdminTeacherController@viewChangePassword');
Route::post('/admin/teacher/changepassword','AdminTeacherController@changePassword');
Route::get('/admin/class/list','AdminClassController@showList');
Route::get('/admin/class/addview','AdminClassController@showAddView');
Route::get('/admin/class/updateview/{id}','AdminClassController@showUpdateView');
Route::post('/admin/class/update','AdminClassController@update');
Route::post('/admin/class/add','AdminClassController@add');

