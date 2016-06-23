<header>

<body>
	<div class="container-fluid" id="section1">
    	<div class="container">
        	<div class="col-md-3">
            	<img src="images/logo.png" class="img img-responsive" />
            </div>
            <div class="col-md-9">
                <div id="head-content">
                    <div class="row text-right">
                        <span class="content1">University Of Colombo School Of Computing</span>
                    </div>
                    <div class="row text-right">
                        <span class="content2">University Of Colombo, Sri Lanka</span>
                    </div>
                </div>
			</div>
		</div>
	</div>
					
				<div class="container-fluid" id="section2">
					<div class="container">
						
							<!-- Left Side Of Navbar -->
								
							@if (Auth::guest())
								
							@else
								@if((Auth::user()->privilege) == 'admin')
									@include('includes.adminheader')
								@elseif((Auth::user()->privilege) == 'librarian')
									@include('includes.librarianheader')
								@elseif((Auth::user()->privilege) == 'assistant')
									@include('includes.assisHead')
								@elseif((Auth::user()->privilege) == 'lecturer')
									@include('includes.lecturerHeader')
								@endif
							@endif
							
							<!-- Right Side Of Navbar -->
							
								<!-- Authentication Links -->
								@if (Auth::guest())
								@else
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>
			
										<ul class="dropdown-menu" role="menu">
											<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
										</ul>
									</li>
								@endif
							</ul>
						</nav>
					</div>
				</div>
				
        
    
</header>