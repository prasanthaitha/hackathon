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
Route::get('/details/{uid}','SearchController@details');
Route::get('course/{uid}','SearchController@course');
Route::get('/category','SearchController@index');
Route::get('/live','SearchController@live');
Route::get('/uncol',function()
{
	return view('unappcol');
}

	);
Route::get('/uncos',function()
{
	return view('unappcos');
}

	);
Route::get('/ccol',function()
{
	return view('ccol');
}

	);
Route::get('/ccos',function()
{
	return view('ccos');
}

	);
Route::get('/dlp',function()
{
	return view('dlp');
}

	);




   

	
//Route::get('/search/filter','SearchController@filter')->name('univ');





Auth::routes();

Route::get('/home', 'HomeController@index');


