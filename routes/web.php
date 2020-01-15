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
// CRUD
// メッセージの個別詳細ページ表示
Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');