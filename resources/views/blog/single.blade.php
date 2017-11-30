@extends('main')

@section('title', "| $post->title")

@section('content')

<div class="row">
    <div class="col-12 col-md-8 md-offset-2">
        <h1>{{ $post->title }}</h1>
        <hr>
        <p>{{ $post->body }}</p>
    </div>
</div>

@stop