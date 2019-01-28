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

Route::get('/', 'NavController@index');
/*Route::get('/signin', 'NavController@signin');*/
Route::get('/browsejobs', 'NavController@browsejobs');
Route::get('/jobdetails', 'NavController@jobdetail');
//Route::get('/signup', 'NavController@signup');
Route::get('/contact', 'NavController@contact');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/home/create-resume', 'HomeController@createResume')->name('createresume')->middleware('verified');

Route::get('/home/profile', 'HomeController@userProfile')->name('userprofile')->middleware('verified');

Route::get('/admin/home','AdminController@index')->name('adminhome')->middleware('admin');

Route::get('/admin/home/manage-jobs','AdminController@managejobs')->name('managejobs');

Route::get('/admin/home/create-job','AdminController@createjob')->name('createjob');

Route::get('/admin/home/manage-resume','AdminController@manageresume')->name('manageresume');