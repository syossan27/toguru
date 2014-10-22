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
		<div class="pure-g" style="height:100%;">
			<div class="pure-u-lg-1-2" style="background:red; height:100%;">
			</div>
			<div class="pure-u-lg-1-2" style="background:blue; height:100%;">
			</div>
		</div>
	</div>

		@include('elements.footer')	

</div>

@stop
