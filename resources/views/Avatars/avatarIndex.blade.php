@extends('layouts.layout')
@section('main')
    @foreach ($avatars as $avatar)
<img src="{{$avatar->img}}" alt="">
<h2>Nome Utente : {{$avatar->user->name}}</h2>
<a class="btn btn-primary" href="{{route("avatars.show",$avatar)}}">Dettagli</a>
    @endforeach
@endsection)
{{-- @dd($avatars); --}}