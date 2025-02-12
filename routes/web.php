<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, "Login"]);;
Route::post("/login", [AuthController::class,"loginPost"])
->name("login.posts");
Route::get("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class,"registerPost"])
->name("register.post");