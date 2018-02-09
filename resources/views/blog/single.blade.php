@extends('main')

@section('title', "| $post->title")

@section('content')

<div class="row">
    <div class="col-12 col-md-8 md-offset-2">
        <h1>{{ $post->title }}</h1>
        <hr>
        <p>{{ $post->body }}</p>
        <br>
        
        <p><strong>Category:</strong> {{ $post->category != null ? "$post->category->category" : "None" }}</p>
        <p><strong>Posted:</strong> {{ $post->created_at }}</p>
    </div>
</div>

@stop