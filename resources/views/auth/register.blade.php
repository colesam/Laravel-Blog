@extends('main')

@section('title', '| Register')

@section('content')

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1>Register</h1>
        <hr>
        <form action="{{ route('register.request') }}" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="email" name="email" maxlength="255" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" minlength="6" maxlength="255" required>
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" minlength="6" maxlength="255" required>
            </div>
            
            <button type="submit" name='submit' class="btn btn-primary btn-block">Register</button>
            {{ Form::token() }}
        </form>
    </div>
</div>

@stop