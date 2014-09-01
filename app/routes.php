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

// ログイン・ログアウト
Route::post('login', 'AccountController@login');
Route::get('logout', 'AccountController@logout');
Route::get('fb_login', 'AccountController@fb_login');
Route::get('fb_login/callback', 'AccountController@fb_login_callback');
Route::get('tw_login', 'AccountController@tw_login');
Route::get('tw_login/callback', 'AccountController@tw_login_callback');

// メールアドレス認証
Route::post('verify_mail', 'AccountController@verifyMail');
Route::get('signup/{hash}', 'AccountController@signUp');
Route::post('signup/complete', 'AccountController@signUpComplete');

Route::when('search*', 'auth');
Route::when('edit*', 'auth');
Route::when('setting*', 'auth');

// 弟子関連ページ
Route::get('pupil', 'PupilController@index');
Route::get('pupil/search', 'PupilController@search');
Route::get('pupil/search/{id}', 'PupilController@search_detail');
Route::get('pupil/search/{id}/request', 'PupilController@request');
Route::get('pupil/edit', 'PupilController@edit');
Route::post('pupil/edit', 'PupilController@update');

// 師匠関連ページ
Route::get('master', 'MasterController@index');
Route::get('master/search', 'MasterController@search');
Route::get('master/search/{id}', 'MasterController@search_detail');
Route::get('master/search/{id}/request', 'MasterController@request');
Route::get('master/edit', 'MasterController@edit');
Route::post('master/edit', 'MasterController@update');

// 設定ページ
Route::get('setting', 'SettingController@index');
