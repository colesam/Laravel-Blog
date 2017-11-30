@extends('main')

@section('title', '| Home')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <h1 class="display-3">Laravel Powered Blog</h1>
            <p class="lead">This is a blog website that I made to better understand the php framework Laravel.</p>
            <hr class="my-4">
            <p class="lead">Click below to view the blog's posts from an admin perspective.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">View posts</a>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">  <!--main content-->
        @foreach($posts as $post)
            
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? '...':'' }}</p>
                <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">View</a>
            </div>
            <hr>
        
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">  <!--sidebar-->
        <h2>Sidebar</h2>
    </div>
</div>

@stop