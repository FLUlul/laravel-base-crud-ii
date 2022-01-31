@extends('layouts.main-layout')
@section('content')
    <h2>Title: {{$movie -> title}}</h2>
    <h3>Subtitle: {{$movie -> subtitle}}</h3>
    <p>Release Date: {{$movie -> release_date}}</p>
    <a href="{{route('home')}}" class="link">go to Home</a>
@endsection