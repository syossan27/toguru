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
			<h1>設定</h1>
			<a href="/setting/update-username">ユーザ名変更</a>
			<br>
			<a href="/setting/update-password">パスワード変更</a>
			<br>
			<button class="button-error pure-button" id="delete-button">退会</a>
			<div id="delete-dialog" title="退会処理">
				<p>本当に退会してもよろしいですか？</p>
			</div>
    </div>
</div>

<div class="content-wrapper">
		
		@include('elements.footer')	

</div>

@stop
