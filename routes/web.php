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

Route::get('/genre','MovieController@genre');

Route::get('/trending','MovieController@trending');

Route::get('/movie','MovieController@movie');


Route::get('/logout','LoginController@authLogout');

Route::post('/cariuser','DashboardController@searchuser');

Route::post('/carimovie','DashboardController@searchmovie');

Route::post('/registuser','LoginController@registerUser');

Route::get('/profilesuser','HomeController@profiles');

Route::post('/updateuser','HomeController@updateUser');

Route::post('/ceklogin','LoginController@authLogin');

Route::post('/deleteuser/{id}','DashboardController@deleteUser');

Route::post('/getdatauser','DashboardController@getDataUser');

Route::post('/lihatuser/{id}','DashboardController@lihatUser');

Route::post('/edituser','DashboardController@editUser');