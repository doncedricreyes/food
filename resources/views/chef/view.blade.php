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
        @vite('resources/css/app.css');
</head>
<body>

	<div class="wrapper">
    @include('layouts.navbar')
        @section('content')
        @endsection

    </div>

    <div class="flex flex-wrap flex-row mx-auto justify-center py-10 bg-rose-50">



        @foreach($recipes as $i)
    <div class='flex items-center justify-center  flex-grow lg:w-1/4 sm:w-1/2  px-2'>
        <div class='w-full max-w-md  mx-auto bg-white rounded-3xl shadow-xl overflow-hidden'>

            <div class='max-w-36 mx-auto'>
              <div class='h-[236px]' style='background-image:url({{asset('images/'.$i->img)}});background-size:cover;background-position:center'>
               </div>
              <div class='p-4 sm:p-6'>

                <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>{{$i->name}}</p>
                <p class='text-[#7C7C80] font-[15px] '>Created by: <span class="font-bold text-gray-700">{{$i->users->get(0)->name}}</span></p>
                <p class='text-[#7C7C80] font-[15px] mt-6'>{{$i->description}}</p>


                  <a href='/recipes/{{$i->id}}' class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                      View this recipe
                  </a>
                  <button wire:click="copy({{$i->id}})" class='block mt-5 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                    Copy this recipe
                  </button>
              </div>
            </div>
        </div>
    </div>

    @endforeach
    <div class="py-10">

    </div>
    </div>


    <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">



@extends('layouts.footer')
@section('content')
@endsection

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
