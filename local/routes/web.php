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

Route::get('trang-chu', 'MyFirstController@getIndex');

Route::get('danh-sach-bac-si','MyFirstController@getListDoctor');

Route::get('chi-tiet-bac-si','MyFirstController@getDetailsDoctor');

// Route::get('/trang-chu', 'MyFirstController@getIndex');
// Route::get('/tra-cuu', 'MyFirstController@getSearch');
// >>>>>>> master
