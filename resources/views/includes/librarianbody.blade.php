<div class="container-fluid" id="section3">
        <div class="container-fluid">
                <div class="col-md-3" id="catalog-logo">
                        <img src="images/ucsc.png" class="img img-responsive" />
                        <br></br>
                        <div id="form">
                                <from role="form" action="{{ url('/locate') }}">
                                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                            <label class="col-md-4 control-label">Member ID</label>
                
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="id" value="{{ old('id') }}">
                                                @if ($errors->has('id'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('id') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
        

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa-btn"></i>Locate Member
                                                </button>
                                            </div>
                                        </div>
                                </from>
                        </div>
        </div>
                
            <div class="col-md-9" id="catalog-panel">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Front Desk</h3>
                        </div>
                        <div class="panel-body text-center">
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="frontdesk-btn">
                                        <img src="icons/issue&return.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="frontdesk-btn">
                                        <img src="icons/circulation.png" width="150" />
                                    </button> 
                                </div>
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="frontdesk-btn">
                                        <img src="icons/reservations.png" width="150" />
                                    </button> 
                                </div>
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="frontdesk-btn">
                                        <img src="icons/opac.png" width="150" />
                                    </button>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Members And Books</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="bookmember-btn">
                                        <img src="icons/books.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" onclick="window.location.href='{{ url('/bookRegister') }}'" class="btn btn-success main" id="bookmember-btn">
                                        <img src="icons/addbook.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="bookmember-btn">
                                        <img src="icons/members.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" onclick="window.location.href='{{ url('/memberRegister') }}'" class="btn btn-success main" id="bookmember-btn">
                                        <img src="icons/addmember.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">My Library</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="admintasks-btn">
                                        <img src="icons/myloans.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="admintasks-btn">
                                        <img src="icons/myreservations.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="admintasks-btn">
                                        <img src="icons/myinfo.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <button type="button" class="btn btn-success main" id="admintasks-btn">
                                        <img src="icons/myhistory.png" width="150" />
                                    </button>
                                </div> 
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>