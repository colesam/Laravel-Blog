@extends('main')

@section('title', '| Edit Categories')

@section('content')

<div class="row">
    <div class="col-12 col-md-8">
        <h1>Edit Categories</h1>
        <table class="table">
            <thead>
                <th></th>
                <th class="large-col">Name</th>
                <th>Post Count</th>
                <th><!-- delete column --></th> 
            </thead>
            <tbody>
                @foreach($categories as $category)
                
                    <tr>
                        <form action="{{ route('categories.update', $category['id']) }}" method="POST">
                        <th>{{ $category['id'] }}</th>
                        <td><input class="form-control" type="text" name="category" value="{{ $category['category'] }}"/></td>
                        <td>{{ $category['num_posts'] }}</td>
                        <td>
                            <button type="submit" class="btn btn-success btn-sm btn-btmargin form-control">Update</button>
                        </td>
                        {{ Form::token() }}
                        {{ method_field('PUT') }}  <!-- generates hidden field that sets the form method to PUT because HTML5 doesn't support it -->
                        </form>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('categories.index') }}" class="btn btn-info form-control">Done</a>
    </div>
</div>

@stop