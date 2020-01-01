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
        Route::get('/logout', 'HomeController@logout');
        Route::get('/home', 'HomeController@getIndex');
        Route::get('/category', 'CategoryController@getIndexCategory');
        //add
        Route::get('/category/add', 'CategoryController@getIndexAddCategory');
        Route::post('/category/add', 'CategoryController@addCategory');

        Route::get('/category/edit/{id}', 'CategoryController@getIndexUpdateCategory');
        Route::post('/category/edit/{id}', 'CategoryController@updateCategory');

        Route::get('/category/delete/{id}', 'CategoryController@deleteCategoryById');

        //News
        Route::get('/news', 'NewsController@getIndexNews');
        Route::get('/news/add', 'NewsController@getIndexAddNews');
        Route::post('/news/add', 'NewsController@postAddNews');

        Route::get('/news/edit/{id}', 'NewsController@getIndexUpdateNews');
        Route::post('/news/edit/{id}', 'NewsController@updateNewsById');
        Route::get('/news/hot/{id}', 'NewsController@updateHot');

        Route::get('/news/delete/{id}', 'NewsController@deleteNewsById');
        
        Route::get('/contact', 'ContactController@getIndex');
        Route::get('/contact/edit', 'ContactController@getIndexUpdate');
        Route::post('/contact/edit', 'ContactController@update');
        
        //inbox
        Route::get('/inbox', 'InboxController@getIndexInbox');
        Route::get('/inbox/detail/{id}', 'InboxController@getInboxDetail');
        Route::get('/inbox/delete/{id}', 'InboxController@deleteInboxById');

        //setting
        Route::get('/setting', 'SettingController@getView');
        Route::get('/setting/edit/{id}', 'SettingController@getViewEdit');
        Route::post('/setting/edit/{id}', 'SettingController@updateSetting');
        Route::get('/setting/add', 'SettingController@getViewAdd');
        Route::post('/setting/add', 'SettingController@addSettings');
        Route::get('/setting/delete/{id}', 'SettingController@deleteSetting');
    });
});



Route::group(['namespace' => 'front'], function() {
    //add inbox 
    Route::post('inbox/add', 'InboxController@postInbox');

    Route::get('/', 'HomeController@getIndex');
    Route::get('/danh-muc/{action}', 'CategoryController@getIndex');

    Route::get('/danh-muc/{category_title}/{id}/{title}', 'NewsController@getIndexNewsDetail');
    Route::get('/lien-he', 'ContactController@getIndex');
});
