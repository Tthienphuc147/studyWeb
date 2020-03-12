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
Route::get('/admin/teacher/list','AdminTeacherController@showList');//hien thi danh sach giao vien
Route::get('/admin/teacher/addview','AdminTeacherController@showAddView');//view them moi giao vien
Route::get('/admin/teacher/updateview/{id}','AdminTeacherController@showUpdateView');//view cap nhat giao vien
Route::post('/admin/teacher/add','AdminTeacherController@add');//them moi giao vien
Route::post('/admin/teacher/update','AdminTeacherController@update');//cap nhat giao vien
Route::get('/admin/teacher/delete/{id}','AdminTeacherController@delete');//xoa giao vien
Route::get('/admin/teacher/viewprofile','AdminTeacherController@viewProfile');//xem thong tin giao vien
Route::get('/admin/teacher/updateprofileview','AdminTeacherController@viewUpdateProfile');//view cap nhat tong tin giao vien
Route::post('/admin/teacher/updateprofile','AdminTeacherController@updateProfile');//cap nhat thong tin giao vien
Route::get('/admin/teacher/changepasswordview','AdminTeacherController@viewChangePassword');//view thay doi mat khau cho giao vien
Route::post('/admin/teacher/changepassword','AdminTeacherController@changePassword');//thay doi mat khau giao vien

//class
Route::get('/admin/class/list','AdminClassController@showList');
Route::get('/admin/class/addview','AdminClassController@showAddView');
Route::get('/admin/class/updateview/{id}','AdminClassController@showUpdateView');
Route::post('/admin/class/update','AdminClassController@update');
Route::post('/admin/class/add','AdminClassController@add');
Route::get('/admin/class/delete/{id}','AdminClassController@delete');
Route::get('/admin/class/showlistsubject/{id}','AdminClassController@showListSubject');//show danh sach môn học
Route::get('/admin/classsubject/delete/{id}','AdminClassController@deleteDetailClass');//xoa chi tiet lophoc_monhoc
Route::get('/admin/showaddsubject/view/{id}','AdminClassController@showAddSubject');//show view them mon hoc vao lop hoc tuong ung
Route::post('/admin/showaddsubject/add','AdminClassController@addSubject');

//subject
Route::get('/admin/subject/list','AdminSubjectController@showList');
Route::get('/admin/subject/addview','AdminSubjectController@showAddView');
Route::get('/admin/subject/updateview/{id}','AdminSubjectController@showUpdateView');
Route::post('/admin/subject/update','AdminSubjectController@update');
Route::post('/admin/subject/add','AdminSubjectController@add');
Route::get('/admin/subject/delete/{id}','AdminSubjectController@delete');

//loaibaihoc
Route::get('loaibaihoc', 'loaibaihocController@index'); // Hiển thị danh sách loại bài học
Route::get('loaibaihoc/create', 'loaibaihocController@create'); // Thêm mới loại bài học
Route::post('loaibaihoc/create', 'loaibaihocController@store'); // Xử lý thêm mới loại bài học
Route::get('loaibaihoc/{id}/edit', 'loaibaihocController@edit'); // Sửa loại bài học
Route::post('loaibaihoc/update', 'loaibaihocController@update'); // Xử lý sửa loại bài học
Route::get('loaibaihoc/{id}/delete', 'loaibaihocController@destroy'); // Xóa loại bài học


//loai tai khoan
Route::get('/admin/accounttype/list','AdminAccountTypeController@showList');
Route::get('/admin/accounttype/addview','AdminAccountTypeController@showAddView');
Route::get('/admin/accounttype/updateview/{id}','AdminAccountTypeController@showUpdateView');
Route::post('/admin/accounttype/update','AdminAccountTypeController@update');
Route::post('/admin/accounttype/add','AdminAccountTypeController@add');


//phan quyen
Route::get('/admin/role/list','AdminRoleController@showList');
Route::get('/admin/role/addview','AdminRoleController@showAddView');
Route::get('/admin/role/updateview/{id}','AdminRoleController@showUpdateView');
Route::post('/admin/role/update','AdminRoleController@update');
Route::post('/admin/role/add','AdminRoleController@add');

//muc do
Route::get('mucdo', 'MucDoController@index');
Route::get('mucdo/create', 'MucDoController@create');
Route::post('mucdo/create', 'MucDoController@store');
Route::get('mucdo/{id}/edit', 'MucDoController@edit');
Route::post('mucdo/update', 'MucDoController@update');
Route::get('mucdo/{id}/delete', 'MucDoController@destroy');

//Dang ky khoa hoc
Route::get('regcourse/{id}','RegCourseController@index');
Route::get('regcourse/{id}/{id2}','RegCourseController@showmon');
Route::get('regcourse/dangky/{id}/{id2}','RegCourseController@register');
Route::get('regcourse/huy/{id}/{id2}','RegCourseController@destroy');

//addteachersubject

Route::get('/admin/addteachersubject/show/{id}','AdminTeacherSubjectController@showList');
Route::post('/admin/addteachersubject/add/{id}','AdminTeacherSubjectController@add');
