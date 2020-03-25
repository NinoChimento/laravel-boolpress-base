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
     @if (session("delete"))
        <div class="alert alert-danger">
            Hai eliminato il post:{{session("delete")->title}}
        </div>
    @endif
<a class="btn btn-success" href="{{route("Posts.create")}}"> Crea Articolo</a>
    <div class="wrap-posts d-flex flex-wrap">
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
                 <h2>{{$post->title}}</h2>
                 {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
               <div class="card-body">
               <h5 class="card-title">Genere : {{$post->genre}}</h5>
               <p class="card-text">{{$post->description}}</p>
               <a href="{{route("Posts.show",$post->id)}}" class="btn btn-primary">Dettagli</a>
               <form action="{{route("Posts.destroy", $post->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Cancella</button>
               </form>
            </div>
             </div>
        @endforeach
    </div>
</body>
</html>