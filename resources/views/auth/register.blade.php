@extends("layouts.default")
@section("title", "Register")
@section("content")
<div class="container d-flex justify-content-center align-items-center vh-100">
    @if(session()->has("success"))
        <div class="alert alert-success">
            {{session()->get("success")}}
        </div>
    @endif
    @if(session()->has("error"))
        <div class="alert alert-success">
            {{session()->get("error")}}
        </div>
    @endif
        <div class="card p-4 shadow" style="width: 300px;">
            <h4 class="text-center mb-3">Register</h4>
            <form method="POST" action="{{route("register.post")}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                    @if ($errors->has('name'))
                        <span class="text-danger">
                            {{$errors->first('name')}}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">
                            {{$errors->first('email')}}
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">
                            {{$errors->first('password')}}
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </div>
@endsection