<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stories</title>

    @vite('resources/css/app.css');
</head>
<body>
	<div class="wrapper">
        @include('layouts.navbar')
    </div>

<div class="flex flex-row justify-center">
    <div class="w-1/2 ml-10 text-4xl font-bold">
        Your Stories
    </div>
    <div class="">
    <a href='/stories/create' class='mt-10 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
        Write a story
    </a>
    </div>
</div>
<br><br>
@foreach($blog as $i)
<div class="flex flex-col justify-center w-11/12">
    <div class="shadow-lg p-5">    
    <a href="/welcome" class="font-extrabold text-lg">{{$i->title}}</a>
    <a href="/awdaw"><p>{{$i->description}}</p></a>
    <br>
    <p>Published on {{$i->created_at->format('M d, Y')}}</p>
    </div>
</div>
@endforeach
        @extends('layouts.footer')

</body>
</html>
