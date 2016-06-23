@extends('layouts.master')

@section('title')
    Pusthaka:Member
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Academic Staff Registration</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/memberRegister') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email :</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nic" class="control-label col-md-4">NIC :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nic" name="nic" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="staff_id" class="control-label col-md-4">Staff ID :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="staff_id" name="staff_id" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_no" class="control-label col-md-4">Phone Number :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="phone_no" name="phone_no" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="control-label col-md-4">Address :</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-success" type="submit">Register</button>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
@endsection
