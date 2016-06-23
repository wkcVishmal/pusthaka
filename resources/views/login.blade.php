@extends('layouts.master')

@section('title')
    Pusthaka:Login
@endsection

@section('content')
<div class="container">

    <div class="row" id="login">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Signin</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('signin') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">Email Address</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="password">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default text-right">Login</button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</div>
@endsection
