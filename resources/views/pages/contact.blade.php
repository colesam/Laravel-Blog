@extends('main')

@section('title', '| Contact')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>

@stop
