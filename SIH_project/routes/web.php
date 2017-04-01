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
