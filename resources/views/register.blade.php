@extends('layouts.master')

@section('title')
    Pusthaka:User registration
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('userSignUp') }}">
                        {!! csrf_field() !!}

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="name">Name :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('privilege') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="privilege">Privilege :</label>
                             <div class="col-md-8">
                                <select class="form-control" id="sel1" name="privilege" id="privilege" value="{{ old('privilege') }}">
                                  <option value="admin">Admin</option>
                                  <option value="librarian">Librarian</option>
                                  <option value="assistant">Assistant</option>
                                  <option value="lecturer">Lecturer</option>
                                </select>
                              </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">Email :</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Password :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="password" id="password" value="asdasd" readonly>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="phone_number">Phone Number :</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="address">Address :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default">Register</button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection