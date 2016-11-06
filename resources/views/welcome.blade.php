@extends('layout.master')

@section('title')
    Welcome to my Twitter Apps
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                    <label for="full_name">Your Full Name</label>
                    <input class="form-control" type="text" name="full_name" id="full_name" value="{{ Request::old('full_name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>   
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group {{ $errors->has('email_login') ? 'has-error' : '' }}">
                    <label for="email_login">Your E-mail</label>
                    <input class="form-control" type="email" name="email_login" id="email" value="{{ Request::old('email_login') }}">
                </div>
                <div class="form-group {{ $errors->has('password_login') ? 'has-error' : '' }}">
                    <label for="password_login">Your Password</label>
                    <input class="form-control" type="password" name="password_login" id="password" value="{{ Request::old('password_login') }}">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>   
    </div>
@endsection 