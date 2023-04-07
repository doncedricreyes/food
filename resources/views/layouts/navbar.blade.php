<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:image" content="og.png"/>
		<link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <title>Food Website Sample PSD to HTML</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>
</head>
<body>
<nav class="navbar">
			<a href="#" class="navbar__company">
				<div class="navbar__company-icon"><img src="{{asset('img/company.png')}}"></div>
				<div class="navbar__company-name">Foodyar</div>
			</a>
			<ul class="navbar__links">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/recipes">Recipes</a></li>
				<li><a href="/chef">Chef</a></li>
                @if(auth()->check())
				<li><a href="/profile">Profile</a></li>
                <li><a href="/logout">Logout</a></li>
                @else
                <li><a href="/login">Login</a></li>
                @endif
				<li class="navbar__main-link"><a href="/mykitchen">My Kitchen</a></li>
			</ul>
			<i class="fa fa-bars navbar__hamburger" aria-hidden="true"></i>
		</nav>

	<div class="sidebar">
		<ul class="sidebar__menu">
			<i class="fa fa-times sidebar__close" aria-hidden="true"></i>

			<li><a>Home</a></li>
			<li><a>Beverages</a></li>
			<li><a>Chef</a></li>
			<li><a>Ingredient</a></li>
			<li><a>Stories</a></li>
            @if(auth()->check())
            <li><a href="/profile">Profile</a></li>
            @else
            <li><a href="/login">Login</a></li>
            @endif
			<li><a>My Kitchen</a></li>
		</ul>
	</div>
	<div class="sidebar-overlay">
	</div>
        @yield('content')
</body>
</html>
