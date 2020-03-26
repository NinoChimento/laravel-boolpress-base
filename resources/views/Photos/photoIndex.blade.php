@extends('layouts.layout')

@section('main')
    <div class="wrap-foto d-flex flex-wrap">
        @foreach ($photos as $photo)
            <div class="card" style="width: 18rem;">
            <h2>Author : {{$photo->user->name}}</h2>
            <img src="{{$photo->img}}" alt="">
            <p>Descrizione Foto : {{$photo->description}}</p>
            </div>
        @endforeach
    </div>
@endsection

