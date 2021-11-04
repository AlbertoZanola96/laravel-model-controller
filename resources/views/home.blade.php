@extends('layouts.app')

@section('content')

    @foreach ($movies as $movie)
        <div class="card" style="border: 1px solid black">
            <h1>{{$movie['title']}}</h1>
            <h3>{{$movie['vote']}}</h3>
            <br>
        </div>
    @endforeach
@endsection
