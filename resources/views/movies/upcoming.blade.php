@extends("layouts.default")
@section("title", "Upcoming Movies | MovieHopper")
@section("content")
<link rel="stylesheet" href="{{url('css/homepage.css')}}">

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
                    <h2>{{ $movie['title'] }}</h2>
                    <p>Release Date: {{ $movie['release_date'] }}</p>
                </li>
            @endforeach
        </ul>
    </main>
</div>

<!-- Footer -->
<footer class="bg-dark text-white mt-5 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Info</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Idea</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Collection</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Legal</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Security</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h4>Subscribe</h4>
                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Your email" required>
                        <button class="btn btn-primary" type="submit">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

@endsection
