<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<title>
			@yield('title')
		</title>
		{{ HTML::style('css/pure.css') }}
		{{ HTML::style('css/grids-responsive.css') }}
		{{ HTML::style('css/toguru.css') }}
		@yield('css')
		{{ HTML::script('http://code.jquery.com/jquery-1.11.1.min.js') }}
		{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js') }}
		{{ HTML::script('js/toguru.js') }}
		@yield('js')
	</head>
	<body>
		@yield('body')
	</body>
</html>
