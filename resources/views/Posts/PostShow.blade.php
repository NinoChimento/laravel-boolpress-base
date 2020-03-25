<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
   
    <div class="card" style="width: 18rem;">
                 <h2>{{$post->title}}</h2>
                 {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
         <div class="card-body">
               <h5 class="card-title">Genere : {{$post->genre}}</h5>
               <p class="card-text">{{$post->description}}</p>
               <a href="{{route("Posts.index")}}" class="btn btn-primary">Home</a>
         </div>
    </div>
</body>
</html>