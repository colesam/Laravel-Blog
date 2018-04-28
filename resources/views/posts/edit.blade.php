@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')

    <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">

@endsection

@section('content')

<form class="form" method="POST" action="{{ route('posts.update', $post->id) }}" data-parsley-validate>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $post->title }}" maxlength="255" required/>
            </div>
            <div class="input-group">
                <span class="input-group-addon">{{ url('') . '/blog/' }}</span>
                <input type="text" class="form-control" name="slug" value="{{ $post->slug }}" minlength="5" maxlength="255" required/>
            </div>
            <hr>
            
            <div class="form-group">
                <textarea class="form-control" name="body" rows="10" required>{{ $post->body }}</textarea>
            </div>
            
            <div class="form-group">
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                    
                        <option value="{{ $tag->id }}" {{ $tag->belongsToPost ? "selected" : "" }}>{{ $tag->name }}</option>
                    
                    @endforeach
                </select>
            </div>
            
            {{ Form::token() }}
            {{ method_field('PUT') }}  <!-- generates hidden field that sets the form method to PUT because HTML5 doesn't support it -->
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
                    </dl>
                    
                    <div class="form-group">
                        <select class="custom-select" name="category_id">
                            @if($post->category_id != NULL)
                                
                                <option selected value="{{ $post->category->id }}">{{ $post->category->category }}</option>
                                
                            @else
                            
                                <option disabled selected value> -- Select a Category -- </option>
                            
                            @endif
                            
                            @foreach($categories as $category)
                            
                                @if($category->id != $post->category_id)
                                
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                
                                @endif
                            
                            @endforeach
                        </select>
                    </div>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-info btn-block">Cancel</a>
                        </div>
                    </div>
                    
                </div>
    
            </div>
        </div>
    </div>
</form>

@stop

@section('scripts')
    
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    
    <!-- script to make select2 form element function -->
    <script>
        $('.select2-multi').select2({
            placeholder: "Select Tags"
        });
    </script>
    
@stop