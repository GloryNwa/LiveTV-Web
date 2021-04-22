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
Route::get('/login', 'AuthController@login')->name("login");

// Route::get('/', function () {
//     return view('index');
//     Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
// });




Route::post('/log', 'AuthController@log')->name("log");
Route::get('/logout', 'AuthController@logout')->name("logout");
Route::post('/register', 'AuthController@register')->name("register");



Route::group(['middleware' => ['CheckAuth']], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('videos', 'VideoController@videos')->name("videos");


    //////////////////////////Catch up////////////////////////////////////////////
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
});
