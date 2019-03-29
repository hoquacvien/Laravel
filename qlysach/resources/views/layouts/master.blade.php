<html>
<head>
    <title>Contacts Management App</title>
    <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<style>
    h1{
        margin-top: 80px;
    }
</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('bookList')}}">Books Management</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('bookList')}}">List all</a></li>
                <li><a href="{{route('createBook')}}">Add new</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body></html>