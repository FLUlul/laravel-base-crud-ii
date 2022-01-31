@extends('layouts.main-layout')
@section('content')

    <h2><a href="{{route('create')}}">Create a new Movie</a></h2>

    <h2>List Movies:</h2>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{route('show', $movie->id)}}">
                    {{$movie -> title}}: 
                    {{$movie -> subtitle}}
                </a>
                --- {{$movie -> release_date}}
                <a href="{{route('edit', $movie->id)}}">EDIT</a>
                <a href="{{route('delete', $movie->id)}}">DELETE</a>
            </li>
        @endforeach
    </ul>
@endsection