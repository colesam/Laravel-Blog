@extends('main')

@section('title', '| Create Post')

@section('stylesheets')

    <link href="{{ secure_asset('css/parsley.css') }}" rel="stylesheet">

@endsection

@section('content')

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <h1>Create New Post</h1>
        <hr>
        <form action="{{ route('posts.store') }}" method="post" data-parsley-validate>
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" maxlength="255" required>
            </div>
            
            <div class="form-group">
                <label for="slug">URL Slug</label>
                <input class="form-control" type="text" name="slug" minlength="5" maxlength="255" required>
            </div>
            
            <div class="form-group">
                <label for="body">Post Body</label>
                <textarea class="form-control" name="body" rows=10 required></textarea>
            </div>
            
            <button type="submit" name='submit' class="btn btn-primary">Create Post</button>
            {{ Form::token() }}
        </form>
    </div>
</div>

@stop

@section('scripts')
    
    <script src="{{ secure_asset('js/parsley.min.js') }}"></script>
    
@stop