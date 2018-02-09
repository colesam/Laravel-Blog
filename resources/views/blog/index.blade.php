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
    @foreach($posts as $post)
    <div class="col-12 col-md-8">
        
        
            <div class="list-item">
                <h2>{{ $post->title }}</h2>
                <div class="tags btn-btmargin">
                    @foreach($post->tags as $tag)
                    
                        <span class="badge badge-secondary">{{ $tag->name }}</span>
                    
                    @endforeach
                </div>
                <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 250 ? '...':'' }}</p>
                <a class="btn btn-primary" href="{{ route('blog.single', $post->slug) }}">Read More</a>
            </div>
        
        
    </div>
    <div class="col-12 col-md-4">
        <p><strong>Published:</strong> {{ date('M j, Y', strtotime($post->created_at)) }}</p>
        <p><strong>Category:</strong> {{ $post->category != null ? $post->category->category : "None" }}</p>
    </div>
    @endforeach
    <div class="col-12">
        {!! $posts->links(); !!}
    </div>
</div>

@stop