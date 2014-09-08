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

<div class="splash-container">
    <div class="splash" style="width:100% !important">
			<h1>パスワード変更</h1>
			{{ Form::open(['action' => 'SettingController@updateUserName']) }}
				現在のユーザ名：{{ $current_username }}
				<br>
				新しいユーザ名：{{ Form::text('new_username', '', ['id' => 'new_username']) }}
				<div id="error_new_username">ユーザ名を入力してください。</div> 
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
