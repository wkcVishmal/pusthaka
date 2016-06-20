@extends('layouts.master')

@section('title')
    Pusthaka:BookRegistration
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/bookRegister') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Book ID</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id" value="{{ old('id') }}">

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                        <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Author</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="author" value="{{ old('name') }}">

                                @if ($errors->has('author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('publisher') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Publisher</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="author" value="{{ old('publisher') }}">

                                @if ($errors->has('publisher'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('publisher') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('edition') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Edition</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="edition" value="{{ old('edition') }}">

                                @if ($errors->has('edition'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edition') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="year" value="{{ old('year') }}">

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Catagory</label>

                             <div class="col-md-6">
                                <select class="form-control" id="sel1" name="privilege">
                                  <option value="academic">Academic</option>
                                  <option value="novel">Novel</option>
                                </select>
                              </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ISBN No.</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}">

                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('no_of_copies') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">No. of Copies</label>

                            <div class="col-md-6">
                                <input type="int" class="form-control" name="no_of_copies" value="{{ old('no_of_copies') }}">

                                @if ($errors->has('no_of_copies'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_of_copies') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
@endsection
