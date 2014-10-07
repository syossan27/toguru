@extends('layouts.master')

@section('title')
Toguru | 設定
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
{{ HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/redmond/jquery-ui.css') }}
@stop

@section('js')
{{ HTML::script('/js/setting.js') }}
@stop

@section('body')

		@include('elements.header')	

<div class="splash-container">
    <div class="splash" style="width:100% !important">
			<h1>パスワード変更</h1>
			{{ Form::open(['action' => 'SettingController@updateUserPassword']) }}
				現在のパスワード：{{ Form::text('old_password', '', ['id' => 'old_password']) }}
				<div id="error_old_password">パスワードが間違っています</div> 
				<br>
				新しいパスワード：{{ Form::text('new_password', '', ['id' => 'new_password']) }}
				<br>
				新しいパスワード（確認）：{{ Form::text('new_password_confirm', '', ['id' => 'new_password_confirm']) }}
				<div id="error_new_password">新しいパスワードが一致していません。</div> 
				<br>
				<button type="submit" class="pure-button">変更</button>
			{{ Form::close() }}
			<a href="/setting">設定に戻る</a>
    </div>
</div>

<div class="content-wrapper">
		
		@include('elements.footer')	

</div>

@stop
