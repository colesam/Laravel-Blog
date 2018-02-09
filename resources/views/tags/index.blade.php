@extends('main')

@section('title', '| All Categories')

@section('content')

<div class="row">
    <div class="col-12 col-md-8">
        <h1>All Tags</h1>
        <table class="table">
            <thead>
                <th>ID</th>
                <th class="large-col">Tag</th>
                <th>Post Count</th>
                <th><!-- delete column --></th>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                
                    <tr>
                        <th>{{ $tag['id'] }}</th>
                        <td>{{ $tag['name'] }}</td>
                        <td>{{ $tag['num_posts'] }}</td>
                        <td>
                            <form action="{{ route('tags.destroy', $tag['id']) }}" method="POST">
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
            <div class="card-header"><strong>Create New Tag</strong></div>
            <div class="card-body">
                <form action="{{ route('tags.store') }}" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" maxlength="255" required>
                    </div>
                    
                    <button type="submit" name='submit' class="btn btn-primary form-control">Create Tag</button>
                    {{ Form::token() }}
                </form>
            </div>
        </div>
    </div>
</div>

@stop