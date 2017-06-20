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
Route::get('/trang-chu', 'MyFirstController@getIndex');

Route::get('/tra-cuu', 'MyFirstController@getSearch');

Route::get('/danh-sach-khoa', 'MyFirstController@getSpecialList');

Route::get('/chi-tiet-khoa/{tenKhoa}', 'MyFirstController@getSpecialDetail');

Route::get('/ho-tro','MyFirstController@getHelp');

Route::get('/dang-nhap','MyFirstController@getLogin');
