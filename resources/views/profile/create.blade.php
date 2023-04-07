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
@vite('resources/css/app.css')
    </head>
<body>

<div class="wrapper">
@include('layouts.navbar')
    @section('content')
    @endsection
</div>



<!-- component -->
<!-- This is an example component -->
<div class="max-w-7xl mx-auto from-[#F9F5F3] via-[#F9F5F3] to-[#F9F5F3] bg-gradient-to-br p-16">
Create your profile
	<form method="POST" action="/profile/create" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="flex flex-row flex-auto">
        <div class="mb-6 w-full mr-5">
            <label for="name" class="block mb-2 text-sm font-medium ">Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Name" value={{auth()->user()->name}} disabled>
        </div>
        </div>

    <div class="mb-6">
        <label for="bio" class="block mb-2 text-sm font-medium ">Describe yourself</label>
        <textarea id="bio" name="bio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" > </textarea>
    </div>
    <div class="flex flex-row w-full">
    <div class="mb-6 w-1/2 mr-5">
        <label for="birthday" class="block mb-2 text-sm font-medium ">Birthday</label>
        <input type="date" id="birthday" name="birthday">
    </div>
    <div class="mb-6 w-1/2 ml-5">
        <label for="gender" class="block mb-2 text-sm font-medium ">Gender</label>
        <div class="flex flex-row">
        <div class="flex flex-row mr-5">
        <input id="gender-1" type="radio" name="gender" value="Male" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" >
            <label for="gender-1" class="text-sm font-medium text-gray-900 ml-2 block">
           Male
            </label>
        </div>
    <div class="flex flex-row mr-5">
        <input id="gender-2" type="radio" name="gender" value="Female" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" >
            <label for="gender-2" class="text-sm font-medium text-gray-900 ml-2 block">
            Female
            </label>
        </div>
    <div class="flex flex-row">
        <input id="gender-3" type="radio" name="gender" value="Others" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" >
            <label for="gender-3" class="text-sm font-medium text-gray-900 ml-2 block">
            Others
            </label>
        </div>
        </div>
    </div>
    </div>
    <div class="mb-6">
        <label for="education" class="block mb-2 text-sm font-medium ">Education</label>
        <input type="text" id="education" name="education" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Education">
    </div>
    <div class="mb-6">
        <label for="image" class="block mb-2 text-sm font-medium ">Upload an image</label>
        <input type="file" id="pic" name="pic" placeholder="Upload picture">
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

	<p class="mt-5">These input field components is part of a larger, open-source library of Tailwind CSS components. Learn
		more by going to the official <a class="text-blue-600 hover:underline"
			href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
			Documentation</a>.
	</p>
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
