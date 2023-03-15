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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
<body>

<div class="wrapper">
@include('layouts.navbar')
    @section('content')
    @endsection
</div>

<div class="container-md">
<form method="POST" action="/mykitchen/create" class="row g-3">
@csrf
<div class="col-12">
    <label for="name" class="form-label">Recipe Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" placeholder="Description"> </textarea>
  </div>
  <div class="col-12">
    <label for="recipe" class="form-label">Recipe</label>
    <textarea class="form-control" id="recipe" name="recipe" placeholder="Recipe"> </textarea>
  </div>
  <div class="col-12">
    <label for="img" class="form-label">Upload Image</label>
    <input type="file" class="form-control" id="img" name="img">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Create Recipe</button>
  </div>
</form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>