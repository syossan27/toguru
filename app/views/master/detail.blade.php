@extends('layouts.master')

@section('title')
Toguru | 師匠詳細
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
{{ HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css') }}
{{ HTML::style('css/jquery.tagit.css') }}
@stop

@section('js')
{{ HTML::script('js/tag-it.min.js') }}
{{ HTML::script('js/do-tag-it.js') }}
{{ HTML::script('js/detail.js') }}
@stop

@section('body')

<div class="splash-container">
    <div class="splash">
			<h1>師匠詳細ページ</h1>
			ユーザ名：{{ $master_detail['username'] }}
			<br>
			スキル：  {{ $master_detail['skill'] }}
			<br>
			説明：    {{ $master_detail['description'] }}
			<br>
			{{ Form::text('request-writing')}}
			<button id="request-master-button" class="pure-button button-secondary" value="{{ $master_detail['user_id'] }}">送信</button>
    </div>
</div>

<div class="content-wrapper">
		
		@include('elements.footer')	

</div>

@stop
