@extends('layouts.master')

@section('title')
Toguru | 弟子紹介文編集
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
{{ HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css') }}
{{ HTML::style('css/jquery.tagit.css') }}
@stop

@section('js')
{{ HTML::script('js/tag-it.min.js') }}
{{ HTML::script('js/edit.js') }}
@stop

@section('body')

		@include('elements.header')	

<div id="main">
    <div class="content">

			<h1>弟子紹介文編集ページ</h1>
			{{ Form::textarea('description', '', ['id' => 'description'])}}
			{{ Form::text('skill', '', ['id' => 'tagit'])}}
			{{ Form::submit('submit', ['id' => 'edit-submit'])}}

    </div>

		@include('elements.footer')	

</div>

@stop
