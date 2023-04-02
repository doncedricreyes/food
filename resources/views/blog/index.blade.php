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

    @foreach($blog as $i)
<div class="rounded-lg m-5 shadow-lg w-3/4 justify-center content-center border-lg">
    <div class="flex flex-col ml-5 mt-5 font-bold">
       {{$i->title}}
    </div>
    <p class=''>By {{$i->users->get(0)->name}}</p>
    <p>{!!$i->body!!}</p>
</div>
@endforeach
        @extends('layouts.footer')

</body>
</html>
