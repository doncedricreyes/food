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
				<li><a href="">Chef</a></li>
				<li><a href="">Ingredient</a></li>
				<li><a href="">Stories</a></li>
				<li class="navbar__main-link"><a href="/mykitchen">My Kitchen</a></li>
			</ul>
			<i class="fa fa-bars navbar__hamburger" aria-hidden="true"></i>
		</nav>
        @yield('content')
</body>
</html>
