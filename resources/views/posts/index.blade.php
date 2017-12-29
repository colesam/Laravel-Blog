@extends('main')

@section('title', '| All Posts')

@section('content')

<div class="row">
    <div class="col-10">
        <h1>All Posts</h1>
    </div>
    
    <div class="col-12 col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">New Post</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th class="large-col">Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>
                            {{ substr($post->body, 0, 50) }}
                            {{ strlen($post->body) > 50 ? '...':'' }}
                        </td>
                        <td>{{ date('M j, Y g:i', strtotime($post->created_at)) }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm btn-btmargin">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm btn-btmargin">Edit</a>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
        <div class="col-12">
            {!! $posts->links(); !!}
        </div>
    </div>
</div>

@stop