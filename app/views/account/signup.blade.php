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

<h1>テスト</h1>
{{ Form::open(['action' => 'AccountController@signUpComplete', 'method' => 'post']) }}
{{ Form::text('username', '', ['placeholder' => 'ユーザ名']) }}
{{ Form::text('password', '', ['placeholder' => 'パスワード']) }}
{{ Form::hidden('hash', $hash) }}
{{ Form::submit('submit') }}
{{ Form::close() }}

@stop
