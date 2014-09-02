@extends('layouts.master')

@section('title')
Toguru | マイページ
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
@stop

@section('js')
@stop

@section('body')

<div class="splash-container">
    <div class="splash">
			<h1>my page</h1>
			<a href="/pupil">弟子画面</a><br>
			<a href="/master">師匠画面</a><br>
			<a href="/search">検索画面</a><br>
			<a href="/pupil/edit">弟子紹介文編集画面</a><br>
			<a href="/master/edit">師匠紹介文編集画面</a><br>
			<a href="/setting">ユーザ設定画面</a><br>
    </div>
</div>

<div class="content-wrapper">
		
		@include('elements.footer')	

</div>

@stop

