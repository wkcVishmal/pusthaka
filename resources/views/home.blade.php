@extends('layouts.master')

@section('title')
    Pusthaka:Home
@endsection

@section('content')
    @if (Auth::guest())
        
	@else
			@if((Auth::user()->privilege) == 'admin')
				@include('includes.adminbody')
			@elseif((Auth::user()->privilege) == 'librarian')
				@include('includes.librarianbody')
            @elseif((Auth::user()->privilege) == 'assistant')
				@include('includes.assisBody')
            @elseif((Auth::user()->privilege) == 'lecturer')
				@include('includes.lecturerbody')
            @endif
	@endif
@endsection
