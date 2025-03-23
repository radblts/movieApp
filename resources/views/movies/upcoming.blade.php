@extends("layouts.default")
@section("title", "Upcoming Movies | MovieHopper")
@section("content")

<link rel="stylesheet" href="{{ url('css/homepage.css') }}">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a class="navbar-brand px-3" href="#">
      <img src="{{ url('imgs/logo.png') }}" alt="Logo">
      MovieHopper
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('upcomingMovies') }}">Upcoming Movies</a></li>
            <li>
                @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                @endif
            </li>
        </ul>
    </div>
</nav>

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
