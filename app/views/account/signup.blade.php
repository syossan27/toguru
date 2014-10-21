@extends('layouts.master')

@section('title')
Toguru | ユーザ登録
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
@stop

@section('js')
@stop

@section('body')

		@include('elements.header')	

<div id="main">
	<div class="content">
		<div id="user-data" class="pure-form">
			<p>ユーザ情報の登録を行います。</p>
			<p>ユーザ名とパスワードを入力して、<br>サインアップボタンをクリックして下さい。</p>
			{{ Form::open(['action' => 'AccountController@signUpComplete', 'method' => 'post']) }}
			{{ Form::text('username', '', ['placeholder' => 'ユーザ名']) }}
			{{ Form::password('password') }}
			{{ Form::hidden('hash', $hash) }}
			{{ Form::submit('サインアップ', ['class' => 'pure-button button-success']) }}
			{{ Form::close() }}
		</div>
	</div>

		@include('elements.footer')	

</div>

@stop
