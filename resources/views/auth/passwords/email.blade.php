@extends('main')

@section('title', '| Forgot Password')

@section('stylesheets')

    <link href="{{ secure_asset('css/parsley.css') }}" rel="stylesheet">

@endsection

@section('content')

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <h1>Reset Password</h1>
        <hr>
        
        <!-- display email sent successfully message -->
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <form action="{{ route('password.email') }}" method="post" data-parsley-validate>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="email" name="email" maxlength="255" required>
            </div>
            
            <button type="submit" name='submit' class="btn btn-primary">Reset Password</button>
            {{ Form::token() }}
        </form>
    </div>
</div>

@stop

@section('scripts')
    
    <script src="{{ secure_asset('js/parsley.min.js') }}"></script>
    
@stop