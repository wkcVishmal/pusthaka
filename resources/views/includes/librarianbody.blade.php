<div class="container-fluid" id="section3">
        <div class="container-fluid">
                <div class="col-md-3" id="catalog-logo">
                        <img src="images/ucsc.png" class="img img-responsive" />
                        <br></br>
                        <div id="form">
                                <form class="form-horizontal" >
                        

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
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-btn fa-user"></i>Locate Member
                                </button>
                            </div>
                        </div>
                    </form>
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
                                    <button type="button" onclick="window.location.href='{{ url('/locate') }}'" class="btn btn-success main" id="frontdesk-btn">
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
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Locate Member</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>