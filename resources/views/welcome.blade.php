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

        @livewireStyles
</head>
<body>
    @livewire('counter')
        @livewireScripts

@if(auth()->check())
    {{auth()->user()->name}}
@endif


	<div class="sidebar">
		<ul class="sidebar__menu">
			<i class="fa fa-times sidebar__close" aria-hidden="true"></i>

			<li><a>Home</a></li>
			<li><a>Beverages</a></li>
			<li><a>Chef</a></li>
			<li><a>Ingredient</a></li>
			<li><a>Stories</a></li>
			<li><a>My Kitchen</a></li>
		</ul>
	</div>
	<div class="sidebar-overlay">
	</div>
	<div class="wrapper">
    @include('layouts.navbar')
        @section('content')
        @endsection
		<div class="hero">
			<div class="hero__left">
				<div class="hero__main-text">
					<span class="hero__main-text--underline">Eat</span> What You Cook
					<br>With Us, <span class="hero__main-text--underline">Together!</span>
				</div>
				<div class="hero__sub-text">

					When you eat something that cooked by
					<br>yourself, the happiness is priceless.
				</div>
				<button class="hero__cta">
					Decide a Menu
				</button>
			</div>
			<div class="hero__right">
				<img src="./img/hero-img.png" alt="A girl vlogging inside her kitchen">
			</div>
		</div>
		<div class="food-tab">
			<div class="food-tab__sub-title">
				Watch Now
			</div>
			<div class="food-tab__main-title">
				Special to Try
			</div>
			<div class="food-tab__menu-overflow">
				<ul class="food-tab__menu">
					<li class="food-tab__menu-tab food-tab__menu-tab--healthy food-tab__menu-tab--active">Healthy Food</li>
					<li class="food-tab__menu-tab food-tab__menu-tab--lunch">Lunch</li>
					<li class="food-tab__menu-tab food-tab__menu-tab--vege">Vege Desert</li>
					<li class="food-tab__menu-tab food-tab__menu-tab--shake">Shake</li>
				</ul>
			</div>
			<!-- Healthy Food -->
			<div class="food-tab__slider food-tab__slider--healthy">
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/salad-kiwi.png" alt="Salad Kiwi dish">
					<div class="food-tab__card-name">
						Salad Kiwi Sugga
					</div>
					<div class="food-tab__card-sub-name">
						Amir Samantha
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/avocado-muscle.png" alt="Avocado Muscle dish">
					<div class="food-tab__card-name">
						Avocado Muscle
					</div>
					<div class="food-tab__card-sub-name">
						John Lennonk
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/bayam-red.png" alt="Bayam Red Poppeye dish">
					<div class="food-tab__card-name">
						Bayam Red Poppeye
					</div>
					<div class="food-tab__card-sub-name">
						Toekang Sayoer
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/naga-fruity.png" alt="Naga Fruity dish">
					<div class="food-tab__card-name">
						Naga Fruity
					</div>
					<div class="food-tab__card-sub-name">
						Imee Saranghae
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/salad-kiwi.png" alt="Salad Kiwi dish">
					<div class="food-tab__card-name">
						Salad Kiwi Sugga
					</div>
					<div class="food-tab__card-sub-name">
						Amir Samantha
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
			</div>
			<!-- Lunch Menu -->
			<div class="food-tab__slider food-tab__slider--lunch food-tab__slider--hide">
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/salad-kiwi.png" alt="Salad Kiwi dish">
					<div class="food-tab__card-name">
						Salad Kiwi Sugga
					</div>
					<div class="food-tab__card-sub-name">
						Amir Samantha
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/avocado-muscle.png" alt="Avocado Muscle dish">
					<div class="food-tab__card-name">
						Avocado Muscle
					</div>
					<div class="food-tab__card-sub-name">
						John Lennonk
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/bayam-red.png" alt="Bayam Red Poppeye dish">
					<div class="food-tab__card-name">
						Bayam Red Poppeye
					</div>
					<div class="food-tab__card-sub-name">
						Toekang Sayoer
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/naga-fruity.png" alt="Naga Fruity dish">
					<div class="food-tab__card-name">
						Naga Fruity
					</div>
					<div class="food-tab__card-sub-name">
						Imee Saranghae
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/salad-kiwi.png" alt="Salad Kiwi dish">
					<div class="food-tab__card-name">
						Salad Kiwi Sugga
					</div>
					<div class="food-tab__card-sub-name">
						Amir Samantha
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
			</div>
			<!-- Vege Desert -->
			<div class="food-tab__slider food-tab__slider--vege food-tab__slider--hide">
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/salad-kiwi.png" alt="Salad Kiwi dish">
					<div class="food-tab__card-name">
						Salad Kiwi Sugga
					</div>
					<div class="food-tab__card-sub-name">
						Amir Samantha
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/avocado-muscle.png" alt="Avocado Muscle dish">
					<div class="food-tab__card-name">
						Avocado Muscle
					</div>
					<div class="food-tab__card-sub-name">
						John Lennonk
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/bayam-red.png" alt="Bayam Red Poppeye dish">
					<div class="food-tab__card-name">
						Bayam Red Poppeye
					</div>
					<div class="food-tab__card-sub-name">
						Toekang Sayoer
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/naga-fruity.png" alt="Naga Fruity dish">
					<div class="food-tab__card-name">
						Naga Fruity
					</div>
					<div class="food-tab__card-sub-name">
						Imee Saranghae
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/bayam-red.png" alt="Bayam Red Poppeye dish">
					<div class="food-tab__card-name">
						Bayam Red Poppeye
					</div>
					<div class="food-tab__card-sub-name">
						Toekang Sayoer
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
			</div>
			<!-- Shake -->
			<div class="food-tab__slider food-tab__slider--shake food-tab__slider--hide">
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/salad-kiwi.png" alt="Salad Kiwi dish">
					<div class="food-tab__card-name">
						Salad Kiwi Sugga
					</div>
					<div class="food-tab__card-sub-name">
						Amir Samantha
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/avocado-muscle.png" alt="Avocado Muscle dish">
					<div class="food-tab__card-name">
						Avocado Muscle
					</div>
					<div class="food-tab__card-sub-name">
						John Lennonk
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/bayam-red.png" alt="Bayam Red Poppeye dish">
					<div class="food-tab__card-name">
						Bayam Red Poppeye
					</div>
					<div class="food-tab__card-sub-name">
						Toekang Sayoer
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/naga-fruity.png" alt="Naga Fruity dish">
					<div class="food-tab__card-name">
						Naga Fruity
					</div>
					<div class="food-tab__card-sub-name">
						Imee Saranghae
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
				<div class="food-tab__card">
					<img class="food-tab__card-image" src="./img/bayam-red.png" alt="Bayam Red Poppeye dish">
					<div class="food-tab__card-name">
						Bayam Red Poppeye
					</div>
					<div class="food-tab__card-sub-name">
						Toekang Sayoer
					</div>
					<div class="food-tab__rating">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
						<img src="./img/star.png" alt="star">
					</div>
				</div>
			</div>
		</div>
		<!-- / Food Tab -->
		<!-- Testimonial Slider -->
		<div class="testimonial">
			<div class="testimonial__slider">
				<div class="testimonial__card">
					<img src="./img/testimonial-quotes.png" class="testimonial__quotation" alt="">
					<div class="testimonial__content">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum esse deserunt natus doloremque animi earum architecto tenetur maxime facilis. Necessitatibus!
					</div>
					<div class="testimonial__profile">
						<div class="testimonial__img">
							<img src="./img/testimonial-img.png" alt="Vege Master Image">
						</div>
						<div class="testimonial__profile-name">
							<div class="testimonial__name">Camella Sarrah</div>
							<div class="testimonial__title">Vege Master</div>
						</div>
					</div>
				</div>
				<div class="testimonial__card">
					<img src="./img/testimonial-quotes.png" class="testimonial__quotation" alt="">
					<div class="testimonial__content">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum esse deserunt natus doloremque animi earum architecto tenetur maxime facilis. Necessitatibus!
					</div>
					<div class="testimonial__profile">
						<div class="testimonial__img">
							<img src="./img/testimonial-img.png" alt="Vege Master Image">
						</div>
						<div class="testimonial__profile-name">
							<div class="testimonial__name">Camella Sarrah</div>
							<div class="testimonial__title">Vege Master</div>
						</div>
					</div>
				</div>
				<div class="testimonial__card">
					<img src="./img/testimonial-quotes.png" class="testimonial__quotation" alt="">
					<div class="testimonial__content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, qui. Quaerat vitae tempora suscipit, ipsum reprehenderit ex optio natus sequi dolorem qui perspiciatis. Velit, possimus.
					</div>
					<div class="testimonial__profile">
						<div class="testimonial__img">
							<img src="./img/testimonial-img.png" alt="Vege Master Image">
						</div>
						<div class="testimonial__profile-name">
							<div class="testimonial__name">Roslin Garcia</div>
							<div class="testimonial__title">HR Manager</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ Testimonial Slider -->
		</div>
		<!-- Testimonials -->
		<div class="statistics">
			<div class="statistics__flex">
				<div class="statistics__card">
					<div class="statistics__number">
						180,000+
					</div>
					<div class="statistics__title">
						MENU FOOD
					</div>
				</div>
				<div class="statistics__card">
					<div class="statistics__number">
						20,000+
					</div>
					<div class="statistics__title">
						COURSE
					</div>
				</div>
			</div>
			<div class="statistics__flex">
				<div class="statistics__card">
					<div class="statistics__number">
						400,000+
					</div>
					<div class="statistics__title">
						COURSE
					</div>
				</div>
				<div class="statistics__card">
					<div class="statistics__number">
						6,900,000
					</div>
					<div class="statistics__title">
						ALUMNI
					</div>
				</div>
			</div>
		</div>
		<!-- /Statistics -->
		<!-- Download section -->
		<div class="download">
			<div class="download__img">
				<img src="./img/download-img.png" alt="">
			</div>
			<div class="download__content">
				<div class="download__main">
					Download our app and join the contest
				</div>
				<div class="download__sub">
					In order to improve our cooking skills, <br>we do need a food photography
				</div>
				<div class="download__button-img">
					<img src="./img/appstore.png" alt="">
					<img src="./img/gplay.png" alt="">
				</div>
			</div>
		</div>
	</div>
@extends('layouts.footer')
@section('content')
@endsection
	<!-- / Wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Slick slider -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
<script type="text/javascript" src="./js/sidebar.js"></script>
<script type="text/javascript" src="./js/fixedNavbar.js"></script>
</body>
</html>
