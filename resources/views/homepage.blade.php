@extends("layouts.default")
@section("title", "Homepage | MovieHopper")
@section("content")
<link rel="stylesheet" href="{{url('css/homepage.css')}}">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a class="navbar-brand px-3" href="#">
      <img src="{{ url('imgs/images.png') }}" alt="Logo">
      MovieHopper
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Genres</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Fantasy</a></li>
                    <li><a class="dropdown-item" href="#">For children</a></li>
                    <li><a class="dropdown-item" href="#">Horror</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    
    <!-- Hero Section -->
    <div class="text-center mt-4">
        <h1>WELCOME TO MOVIEHOPPER</h1>
        <h3 class="mt-3">Global Top 10</h3>
    </div>

    <!-- Movie Carousel Placeholder -->
    <div class="text-center my-5">
        <h3>************ movie carousel here *************</h3>
    </div>
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
