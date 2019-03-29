<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/nav_bar.css')}}">
</head>
<body>
	<ul >
		<li><a href="{{route('home')}}">Trang Chu</a></li>
		<li><a href="{{route('bookList')}}">list</a></li>
		<li><a href="{{route('createBook')}}">Add book</a></li>
	</ul>
	@yield('content')
</body>
</html>