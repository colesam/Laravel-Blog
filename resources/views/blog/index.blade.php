@extends('main')

@section('title', '| Blog')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Blog</h1>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-8">
        @foreach($posts as $post)
        
            <div class="list-item">
                <h2>{{ $post->title }}</h2>
                <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
                <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...':'' }}</p>
                <a class="btn btn-primary" href="{{ route('blog.single', $post->slug) }}">Read More</a>
            </div>
        
        @endforeach
    </div>
    <div class="col-12">
        {!! $posts->links(); !!}
    </div>
</div>

@stop