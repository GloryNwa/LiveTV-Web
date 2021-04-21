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
Route::get('/', 'AuthController@login')->name("login");


// Route::group(['middleware'=>['auth']], function (){

Route::post('/log', 'AuthController@log')->name("log");
Route::get('/logout', 'AuthController@logout')->name("logout");
Route::post('/register', 'AuthController@register')->name("register");






Route::get('/index', 'HomeController@index')->name("home");

// Route::get('/login','AuthController@loginPage')->name("loginPage");

Route::get('videos', 'VideoController@videos')->name("videos");


//////////////////////////Category////////////////////////////////////////////
Route::get('/category/all', 'CategoryController@category')->name("category");
Route::get('/catch-up/{category_id}', 'CategoryController@singleCategory')->name("singleCategory");
Route::get('/catch/up/{category_id}', 'CategoryController@catchupPlayer')->name("catchupPlayer");

//////////////////////////LiveTV////////////////////////////////////////////

Route::get('/livetv/web', 'LiveTvController@liveTV')->name("liveTV");
Route::get('/livetv/web/{video_id}', 'LiveTvController@liveTVPlayer')->name("liveTVPlayer");
Route::post('/comment', 'LiveTvController@commentForm')->name("commentForm");

Route::get('/stations/all', 'LiveTvController@stations')->name("stations");
Route::get('/watch/live/{id}', 'LiveTvController@view_live')->name("view_live");

//////////////////////////Profile////////////////////////////////////////////

Route::get('/user/profile', 'ProfileController@profile')->name("profile");
