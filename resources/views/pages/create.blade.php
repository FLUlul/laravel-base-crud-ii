@extends('layouts.main-layout')
@section('content')
    <h3>Create</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('store')}}" method="POST">

        @method('POST')
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title"><br>
        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle"><br>
        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date"><br>

        <button type="submit">Create</button>

    </form>

    <a href="{{route('home')}}">home</a>
@endsection