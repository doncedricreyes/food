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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

        @vite('resources/css/app.css');
        @livewireStyles
</head>
<body>

    @livewireScripts
	<div class="wrapper">
    @include('layouts.navbar')


    </div>

    <!-- component -->

    <div class="max-w-7xl mx-auto from-[#F9F5F3] via-[#F9F5F3] to-[#F9F5F3] bg-gradient-to-br p-16">
        @foreach ($recipes as $i)




                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium ">Recipe name</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Recipe" value="{{$i->name}}" disabled>
                </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium ">Describe your recipe</label>
                <textarea id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{$i->description}}</textarea>
            </div>
            <div class="mb-6">
                <label for="recipe" class="block mb-2 text-sm font-medium ">Your Recipe</label>
                <textarea id="recipe" name="recipe" rows="10" cols="50" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{$i->recipe}}</textarea>
            </div>


            <livewire:ratings id="{{$i->id}}">
        <span class="block mb-2 text-lg font-bold mt-20 ">Comments</span>
        <livewire:comments id="{{$i->id}}">
            @endforeach
        </div>



@extends('layouts.footer')


<!-- component -->
<!-- This is an example component -->


	<!-- / Wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Slick slider -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>
<script type="text/javascript" src="./js/sidebar.js"></script>
<script type="text/javascript" src="./js/fixedNavbar.js"></script>
</body>
</html>
