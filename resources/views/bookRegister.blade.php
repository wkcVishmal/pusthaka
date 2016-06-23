@extends('layouts.master')

@section('title')
    Pusthaka:BookRegistration
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Book Registration</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/bookRegister') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label" for="name">Title :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                            </div>
                        </div>
                            
                        <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label" for="author">Author :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="author" id="author" value="{{ old('name') }}">
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('publisher') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label" for="publisher">Publisher :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="publisher" id="publisher" value="{{ old('publisher') }}">
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('edition') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label" for="edition">Edition :</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="edition" id="edition" value="{{ old('edition') }}">
                            </div>
                            <label class="col-md-3 control-label" for="year">Year :</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="year" id="year" value="{{ old('year') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="category">Catagory :</label>
                             <div class="col-md-9">
                                <select class="form-control" id="sel1" name="category">
                                    <option value="ref_book">Reference Book</option>
                                    <option value="borro_book">Borrowable Book</option>
                                    <option value="rec_book">Recommened Book</option>
                                </select>
                              </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('isbn') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label" for="isbn">ISBN No. :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="isbn" id="isbn" value="{{ old('isbn') }}">
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('no_of_copies') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label" for="no_of_copies">No. of Copies :</label>
                            <div class="col-md-6">
                                <input type="int" class="form-control" name="no_of_copies" id="no_of_copies" value="{{ old('no_of_copies') }}" required>
                            </div>
                            <div class="col-md-3 text-right">
                                <button onclick="displayIds()" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="add_copies">Add Book Copies</button>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-default" type="submit">Register</button>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enter Copies</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="fields"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>

    function displayIds() {
        var copies = document.getElementById("no_of_copies").value;
        for(i = 0; i < copies; i++){
            document.getElementById("fields").innerHTML = k;
        }
    }
</script>
@endsection
