
@extends('layouts.layout')
@section('main')
    <div class="card" style="width: 18rem;">
            <h2>Author : {{$photo->user->name}}</h2>
            <h2>Month of publocation: {{$photo->title}}</h2>
            <img src="{{$photo->img}}" alt="">
            <p>Descrizione Foto : {{$photo->description}}</p>
            <a class="btn btn-primary" href="{{route("photos.index",$photo)}}">Show</a>
     </div>
@endsection