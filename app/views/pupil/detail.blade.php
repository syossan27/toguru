@extends('layouts.master')

@section('title')
Toguru | 弟子詳細
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
{{ HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css') }}
{{ HTML::style('css/jquery.tagit.css') }}
@stop

@section('js')
{{ HTML::script('js/notice.js') }}
{{ HTML::script('js/detail.js') }}
@stop

@section('body')

<div class="splash-container">
    <div class="splash">
			<h1>弟子詳細ページ</h1>
			ユーザ名：{{ $pupil_detail['username'] }}
			<br>
			スキル：  {{ $pupil_detail['skill'] }}
			<br>
			説明：    {{ $pupil_detail['description'] }}
			<br>
			{{ Form::text('request-writing')}}
			<button id="request-pupil-button" class="pure-button button-secondary" value="{{ $pupil_detail['id'] }}">送信</button>
    </div>
</div>

@stop
