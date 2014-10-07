@extends('layouts.master')

@section('title')
Toguru | お知らせ
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
{{ HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css') }}
@stop

@section('js')
@stop

@section('body')

<div class="splash-container">
    <div class="splash">
			<h1>お知らせ画面</h1>
				@foreach($notice_list as $notice)
				<table>
					<tr>
					</tr>
				</table>
				@endforeach
    </div>
</div>

<div class="content-wrapper">
		
		@include('elements.footer')	

</div>

@stop
