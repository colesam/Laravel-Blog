@extends('main')

@section('title', '| All Categories')

@section('content')

<div class="row">
    <div class="col-12 col-md-8">
        <h1>All Categories</h1>
        <table class="table">
            <thead>
                <th></th>
                <th class="large-col">Category</th>
                <th>Post Count</th>
                <th><!-- delete column --></th> 
            </thead>
            <tbody>
                @foreach($categories as $category)
                
                    <tr>
                        <th>{{ $category['id'] }}</th>
                        <td>{{ $category['category'] }}</td>
                        <td>{{ $category['num_posts'] }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $category['id']) }}" method="POST">
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm btn-btmargin form-control">Delete</button>
                                {{ Form::token() }}
                            </form>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-12 col-md-4">
        <div class="card border-light text-center">
            <div class="card-header"><strong>Create New Category</strong></div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="category" maxlength="255" required>
                    </div>
                    
                    <button type="submit" name='submit' class="btn btn-primary form-control btn-btmargin">Create Category</button>
                    <a href="{{ route('categories.edit') }}" class="btn btn-info form-control">Edit Categories</a>
                    {{ Form::token() }}
                </form>
            </div>
        </div>
    </div>
</div>

@stop