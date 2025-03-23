@extends("layouts.default")
@section("title", "Upcoming Movies | MovieHopper")
@section("content")

<link rel="stylesheet" href="{{ url('css/homepage.css') }}">

<div class="container">
    <header class="text-center mt-4">
        <h1>Upcoming Movies</h1>
    </header>
    <main>
        <ul class="movie-list">
            @foreach ($movies as $movie)
                <li class="movie-item">
                    <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" 
                         alt="{{ $movie['title'] }}" 
                         class="movie-poster">
                    <h2>{{ $movie['title'] }}</h2>
                    <p><strong>Release Date:</strong> {{ $movie['release_date'] }}</p>
                    <p><strong>Director:</strong> {{ $movie['director'] }}</p>
                    <p>{{ $movie['overview'] }}</p>
                </li>
            @endforeach
        </ul>
    </main>
</div>

@endsection
