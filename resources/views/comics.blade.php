@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="current">
            <h2>Current Series</h2>
        </div>
        <div class="cards">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic["thumb"] }}" alt="">
                    <p>{{ $comic["series"] }}</p>
                </div>
            @endforeach
        </div>
        <div class="btn">
            <a href="#">Load More</a>
        </div>
    </div>
@endsection