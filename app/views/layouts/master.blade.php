<!DOCTYPE>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>
			@yield('title')
		</title>
	</head>
	<body>
		@include('elements.header')	
		@yield('body')
		@include('elements.footer')	
	</body>
</html>
