<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware("auth")->group(function(){
    Route::view("/", "homepage")->name("home");
});

Route::get('/movies/upcoming', [MovieController::class, 'getUpcomingMovies'])
->name("upcomingMovies");
Route::get('/rated-movies', [MovieController::class, 'getRatedMovies'])
->name("ratedMovies");

Route::get('/login', [AuthController::class, "Login"])
->name("login");
Route::post("/login", [AuthController::class,"loginPost"])
->name("login.post");
Route::get("/register", [AuthController::class, "register"])
->name("registration");
Route::post("/register", [AuthController::class,"registerPost"])
->name("register.post");
Route::post("/logout", [AuthController::class,"logout"])
->name("logout");
