            
@extends('layouts.master')

@section('title')
    Pusthaka:Member
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Locate Member</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/locate') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('mid') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ID</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mid" value="{{ old('id') }}">

                                @if ($errors->has('mid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Locate Member
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
