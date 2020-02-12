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

//トップページ
Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

//会員登録画面(email)
Route::get('/regist-mail', 'UsersController@registmail')->name('regist_mail');

Route::post('/regist', 'UsersController@regist')->name('regist');

//ログインページ
Route::get('/home', 'HomeController@index')->name('home');

//ログイン処理
//Route::post('/login', 'LoginController@login')->name('login');

//ログイン後 検索画面
Route::post('/{user}/search', 'UsersController@search')->name('search');