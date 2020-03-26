@extends('layouts.layout')
@section('main')
    @foreach ($avatars as $avatar)
<img src="{{$avatar->img}}" alt="">
<h2>Nome Utente : {{$avatar->user->name}}</h2>
    @endforeach
@endsection)
{{-- @dd($avatars); --}}