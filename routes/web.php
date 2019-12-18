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

// Route::get('/login', 'Auth\LoginController@getIndex');
// Route::post('/login', 'Auth\LoginController@login');
Route::group(['namespace' => 'Auth'], function(){
    Route::group(['prefix' => 'login', 'middleware'=>'CheckLoggedIn'], function() {
        Route::get('/', 'LoginController@getIndex');
        Route::post('/', 'LoginController@login');
    });
});
Route::group(['namespace' => 'admin', 'middleware'=>'CheckLoggedOut'], function(){
    Route::group(['prefix' => 'admin'], function() {
        Route::get('/home', 'HomeController@getIndex');
    });
}); 

Route::get('/', function () {
    return view('welcome');
});