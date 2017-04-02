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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','SearchController@search');
//Route::get('/search/filter','SearchController@filter')->name('univ');


//Route::get('/filter','SearchController@filter');

Route::post('send','mailController@send');
Route::get('email','mailController@email');

//Route::get('/search','SearchController@search');
//Route::get('/search/filter','SearchController@filter')->name('univ');




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::GET('admin/home','AdminController@index');
Route::GET('admin/editor','EditorController@index');

Route::GET('admin/test','EditorController@test');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm ')->name('admin.password.reset');

Route::post('/reportx','ReportController@ReportNow');
Route::get('/report','ReportController@ReportForm');



Route::post('/report/check','ReportController@CheckStatus');

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('upload','UploadController@index');

Route::get('showreport','AdminController@show');



Route::get('/showdetails','UniversityController@index');
Route::get('new','UniversityController@newUniversity');
Route::get('save','UniversityController@save');
Route::get('edit/{id}','UniversityController@edit');
Route::get('delete/{id}','UniversityController@delete');
Route::post('updateInfo','UniversityController@updateInfo');

Route::get('/repshowdetails','ReportController@repindex');
Route::get('repnew','ReportController@repnewReport');
Route::get('repsave','ReportController@repsave');
Route::get('repedit/{id}','ReportController@repedit');
Route::get('repdelete/{id}','ReportController@repdelete');
Route::post('repupdateInfo','ReportController@repupdateInfo');
Route::get('/started',function()

{
	return view('admin.started');
});
Route::get('/pendingreports','ReportController@pending');




