<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>
			@yield('title')
		</title>
		{{ HTML::style('http://yui.yahooapis.com/pure/0.5.0/pure-min.css') }}
	</head>
	<body>
		@include('elements.header')	
		@yield('body')
		@include('elements.footer')	
	</body>
</html>
