            
@extends('layouts.master')

@section('title')
    Pusthaka:Member
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Locate Book</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/locateCopy')}}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('book_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Book ID</label>
                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="book_id" value="{{ old('book_id') }}">

                                @if ($errors->has('book_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('book_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Lend
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
