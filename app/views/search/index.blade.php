@extends('layouts.master')

@section('title')
Toguru | 検索
@stop

@section('css')
{{ HTML::style('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}
@stop

@section('js')
{{ HTML::script('js/search.js')}}
@stop

@section('body')

		@include('elements.header')	

<div class="splash-container">
    <div class="splash" style="width:100% !important">
			<div class="pure-g">
				<div class="pure-u-lg-1-5 search-left" style="border-right:1px solid; hight:100%">
					<h1>検索ページ - 左</h1>
					<form class="pure-form" id="search-form" onSubmit="return false;">
						<label for="option-two" class="pure-radio">
								<input id="option-two" type="radio" name="optionsRadios" value="master" checked>
								師匠検索
								<input id="option-two" type="radio" name="optionsRadios" value="pupil">
								弟子検索
						</label>
						<input type="text" class="pure-input-rounded" id="search-text">
						<button type="submit" class="pure-button" id="search-button">Search</button>
					</form>
				</div>
				<div class="pure-u-lg-4-5 search-right" style="height:100%;">
					<h1>検索ページ - 右</h1>
				</div>
			</div>
    </div>
</div>

<div class="content-wrapper">
		
		@include('elements.footer')	

</div>

@stop
