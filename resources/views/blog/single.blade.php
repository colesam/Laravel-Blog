@extends('main')

@section('title', "| $post->title")

@section('content')

<div class="row">
    <div class="col-12 col-md-8">
        <h1>{{ $post->title }}</h1>
        <hr>
        <p class="lead">{{ $post->body }}</p>
        
        <div class="tags">
            @foreach($post->tags as $tag)
            
                <span class="badge badge-secondary">{{ $tag->name }}</span>
            
            @endforeach
        </div>

    </div>
    
    <div class="col-12 col-md-4">
        <div class="card border-light text-center">
            <div class="card-header"><strong>Post Info</strong></div>
            <div class="card-body">
                
                <dl class="row end">
                    <dt class="col-4">Created:</dt>
                    <dd class="col-8">{{ date('M j, Y g:i', strtotime($post->created_at)) }}</dd>
                    
                    <dt class="col-4">Updated:</dt>
                    <dd class="col-8">{{ date('M j, Y g:i', strtotime($post->updated_at)) }}</dd>
                    
                    <dt class="col-4">Category:</dt>
                    <dd class="col-8">{{ $post->category != null ? $post->category->category : "None" }}</dd>
                </dl>
                
                <hr>
                
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('blog.index') }}" class="btn btn-link btn-block">Back to Posts</a>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>

@stop