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

Route::get('/','HomeController@auth');

Route::get('/home', 'MovieController@home');

Route::get('/auth','HomeController@auth');

Route::get('/regist','HomeController@regist');

Route::get('/dashboard','DashboardController@dashboard');

Route::get('/stream','MovieController@stream');

Route::post('/ceklogin','LoginController@authLogin');

Route::get('/logout','LoginController@authLogout');

Route::post('cariuser','DashboardController@searchuser');

Route::post('/registuser','LoginController@registerUser');

Route::get('/profilesuser','HomeController@profiles');

Route::get('/genre','MovieController@genre');

Route::get('/trending','MovieController@trending');