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
<footer class="footer">
		<div class="footer__flex">
			<a href="#" class="footer__company">
				<div class="footer__company-icon"><img src="./img/company.png"></div>
				<div class="footer__company-name">Foodyar</div>
			</a>
			<div class="footer__cont-links">
				<div class="footer__flexbox">

				</div>
				<div class="footer__flexbox">
					<ul class="footer__links">
						<li class="footer__link-main">Be Our Friend</li>
						<li>3, Season Park, Jakarta</li>
						<li>support@foodyar.co,id</li>
						<li>021 - 1111 - 2222</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		All Rights Reserved Foodyar by Pixel from BuildWith Angga 2020
	</div>
        @yield('content')
</body>
</html>
