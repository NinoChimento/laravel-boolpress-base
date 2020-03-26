@extends('layouts.layout')

@section('main')
    <div class="wrap-foto d-flex flex-wrap">
        @foreach ($photos as $photo)
            <div class="card" style="width: 18rem;">
            <h2>Author : {{$photo->user->name}}</h2>
            </div>
        @endforeach
    </div>
@endsection

