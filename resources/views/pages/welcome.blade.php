@extends('main')

@section('title', '| Home')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <h1 class="display-3">Laravel Powered Blog</h1>
            <p class="lead">This is a blog website that I made to better understand the php framework Laravel.</p>
            <hr class="my-4">
            <p class="text-center">
                Use the buttons below to either login or register as the blog administrator, or view the blog posts from a guest's perspective.
            </p>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <a href="{{ route('auth.form') }}" class="btn btn-primary form-control">Login</a>
                </div>
                <div class="col-12 col-sm-4">
                    <a href="{{ route('register.form') }}" class="btn btn-info form-control">Register</a>
                </div>
                <div class="col-12 col-sm-4">
                    <a href="{{ route('blog.index') }}" class="btn btn-success form-control">View Blog Posts</a>
                </div>
            </div>        
        </div>
    </div>
</div>

@stop