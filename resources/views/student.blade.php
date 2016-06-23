@extends('layouts.master')

@section('title')
    Pusthaka:Student
@endsection

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="row">

            <!-- register one by one -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Student Registration</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form action="{{ route('regstudent') }}" method="post" class="form-horizontal">

                                <input type="hidden" name="privilege" value="student">
                                <input type="hidden" name="password" value="asdasd">

                                <div class="form-group">
                                    <label for="reg_no" class="control-label col-md-4">Registration No :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="reg_no" name="reg_no" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="index" class="control-label col-md-4">Index Number :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="index" name="index" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="year" class="control-label col-md-4">Year :</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" id="year" name="year" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="control-label col-md-4">Name :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nic" class="control-label col-md-4">NIC :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="nic" name="nic" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="control-label col-md-4">Phone Number :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="control-label col-md-4">Address :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-md-4">Email :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="email" name="email" required>
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

            <!-- register as a bulk-->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Batch Registration</div>
                    <div class="panel-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="file" class="control-label">Choose file: </label>
                                <input type="file" class="">
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
@endsection