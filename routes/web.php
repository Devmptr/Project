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

/* AUTH LOGIN-REGIST */

Route::get('/','HomeController@auth');

Route::get('/home', 'MovieController@home');

Route::get('/auth','HomeController@auth');

Route::get('/regist','HomeController@regist');

Route::get('/logout','LoginController@authLogout');

Route::post('/ceklogin','LoginController@authLogin');



/* PAGES */
Route::get('/stream/{id}','MovieController@stream');

Route::get('/genre','MovieController@genre');

Route::get('/trending','MovieController@trending');

Route::get('/movie','MovieController@movie');

Route::get('/profileadmin','DashboardController@profileadmin');



/* DASHBOARD ADMIN-USER */

Route::get('/usersetting','DashboardController@userset');

Route::post('/cariuser','DashboardController@searchuser');

Route::post('/getdatauser','DashboardController@getDataUser');

Route::post('/loaddatauser/{id}','DashboardController@loadDataUser');

Route::post('/edituser','DashboardController@editUser');

Route::get('/deleteuser/{id}','DashboardController@deleteUser');

Route::post('/insertuser','DashboardController@insertUser');



/* DASHBOARD ADMIN-MOVIE */

Route::get('/moviesetting','DashboardController@movieset');

Route::post('/carimovie','DashboardController@searchmovie');

Route::post('/getdatamovie','DashboardController@getDataMovie');

Route::post('/loaddatamovie/{id}','DashboardController@loadDataMovie');

Route::get('/deletemovie/{id}','DashboardController@deleteMovie');

Route::post('/editmovie','DashboardController@editMovie');

Route::post('/insertmovie','DashboardController@insertMovie');


/* PROFILE USER */

Route::post('/registuser','LoginController@registerUser');

Route::get('/profileuser','HomeController@profiles');

Route::post('/updateuser','HomeController@updateUser');