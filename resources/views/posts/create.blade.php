@extends('main')

@section('title', '| Create Post')

@section('stylesheets')

    <link href="{{ secure_asset('css/parsley.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/select2.min.css') }}" rel="stylesheet">

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
            
            <div class="form-group">
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                    
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <select class="custom-select" name="category_id">
                    <option disabled selected value> -- Select a Category -- </option>
                    @foreach($categories as $category)
                    
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    
                    @endforeach
                </select>
            </div>
            
            <button type="submit" name='submit' class="btn btn-success form-control">Create Post</button>
            {{ Form::token() }}
        </form>
    </div>
</div>

@stop

@section('scripts')
    
    <script src="{{ secure_asset('js/parsley.min.js') }}"></script>
    <script src="{{ secure_asset('js/select2.min.js') }}"></script>
    
    <!-- script to make select2 form element function -->
    <script>
        $('.select2-multi').select2({
            placeholder: "Select Tags"
        });
    </script>
    
@stop