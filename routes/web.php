<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){
    Route::view("/", "homepage")->name("home");
});

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
