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
Route::when('pupil*', 'auth');
Route::when('master*', 'auth');
Route::when('setting*', 'auth');

// 検索ページ
Route::get('search', 'SearchController@index');

// 弟子関連ページ
Route::get('pupil', 'PupilController@index');
Route::post('pupil/search', 'PupilController@search');
Route::get('pupil/detail/{id}', 'PupilController@detail');
Route::post('pupil/request/{id}', 'PupilController@request');
Route::get('pupil/edit', 'PupilController@edit');
Route::post('pupil/edit', 'PupilController@update');

// 師匠関連ページ
Route::get('master', 'MasterController@index');
Route::post('master/search', 'MasterController@search');
Route::get('master/detail/{id}', 'MasterController@detail');
Route::post('master/request/{id}', 'MasterController@request');
Route::get('master/edit', 'MasterController@edit');
Route::post('master/edit', 'MasterController@update');

// 設定ページ
Route::get('setting', 'SettingController@index');
Route::get('setting/delete-account', 'SettingController@deleteAccount');
Route::get('setting/update-password', 'SettingController@viewUpdateUserPassword');
Route::post('setting/update-password', 'SettingController@updateUserPassword');
Route::post('setting/check-old-password', 'SettingController@checkOldPassword');
Route::get('setting/update-username', 'SettingController@viewUpdateUserName');
Route::post('setting/update-username', 'SettingController@updateUserName');

// お知らせページ
Route::get('notice', 'NoticeController@index');
Route::post('notice/create', 'NoticeController@create');
Route::get('notice/get', 'NoticeController@get');
