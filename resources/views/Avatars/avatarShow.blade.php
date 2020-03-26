@extends('layouts.layout')
@section('main')

    <div class="card">
        <h1>name :{{ $avatar->user->name}}</h1>
        <img src="{{$avatar->img}}" alt="">
        <h4>{{$avatar->user->email}}</h4>
        <h4>Create il : {{$avatar->created_at}}</h4>
    </div>
@endsection