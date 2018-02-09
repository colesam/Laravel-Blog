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
        <form action="{{ route('password.reset') }}" method="post" data-parsley-validate>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="email" name="email" maxlength="255" required>
            </div>
            
             <div class="form-group"> 
                 <label name="password">Password</label> 
                 <input id="password" name="password" type="password" class="form-control" max-length="255"> 
            </div> 
            
            <div class="form-group"> 
                <label name="password_confirmation">Confirm Password</label> 
                <input id="password" name="password_confirmation" type="password" class="form-control" max-length="255"> 
            </div>
            
            <button type="submit" name='submit' class="btn btn-primary">Reset Password</button>
            
            <input type="hidden" name="token" value="{{ $token }}">
            {{ Form::token() }}
        </form>
    </div>
</div>

@stop

@section('scripts')
    
    <script src="{{ secure_asset('js/parsley.min.js') }}"></script>
    
@stop