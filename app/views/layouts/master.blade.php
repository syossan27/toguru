<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<title>
			@yield('title')
		</title>
		{{ HTML::style('http://yui.yahooapis.com/pure/0.5.0/pure-min.css') }}
		{{ HTML::style('http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css') }}
		@yield('css')
		@yield('js')
	</head>
	<body>
		@include('elements.header')	
		@yield('body')
	</body>
</html>
