@extends('main')

@section('title', '| Login')

@section('content')

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1>Login</h1>
        <hr>
        <form action="{{ route('auth.login') }}" method="post">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>
            
            <div class="form-group">
                 <input type="checkbox" name="remember" value="true"> Stay signed in <br>
            </div>
            
            <button type="submit" name='submit' class="btn btn-primary btn-block">Login</button>
            {{ Form::token() }}
        </form>
        <div class="row">
            <div class="col-12"><a href="{{ route('password.reset') }}">Reset Password</a></div>
            <div class="col-12"><a href="{{ route('register.form') }}">Register</a></div>
        </div>
    </div>
</div>

@stop