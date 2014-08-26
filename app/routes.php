<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// トップページ
Route::get('/', 'TopController@index');

// メールアドレス認証
Route::get('verify_mail/', 'UserController@index');

// 師匠・弟子検索ページ
Route::get('search/', 'SearchController@index');
Route::get('search/pupil', 'SearchController@pupil');
Route::get('search/pupil/{id}', 'SearchController@pupil_detail');
Route::get('search/pupil/{id}/request', 'SearchController@pupil_request');
Route::get('search/master', 'SearchController@master');
Route::get('search/master/{id}', 'SearchController@master_detail');
Route::get('search/master/{id}/request', 'SearchController@master_request');

// 師匠・弟子文言編集ページ
Route::get('edit/', 'EditController@index');
Route::get('edit/pupil', 'EditController@pupil');
Route::post('edit/pupil', 'EditController@pupil_updating');
Route::get('edit/master', 'EditController@master');
Route::post('edit/master', 'EditController@master_updating');

// 設定ページ
Route::get('setting/', 'SettingController@index');
