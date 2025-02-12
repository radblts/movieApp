<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    function loginPost(Request){

    }

    public function register()
    {
        return view('auth.register');
    }
    function registerPost(Request $request){
        $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);
    }

}
