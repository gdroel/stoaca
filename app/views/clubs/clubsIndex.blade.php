@extends('layout')

@section('content')
<div class="jumbotron jumbotron-clubs">
	<div class="container">
		<h1 class="jumbotron-clubs-h1 movedown-h1">Clubs</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-9">
		@foreach($clubs as $club)
		<div class="col-md-6">
			<hr>
			<h2 >{{ $club->name }}</h2>
			<h3 class="gray">{{ $club->location }}</h3>
			
			<p>Coach: {{ $club->coach }}</p>
			<p>Phone Contact: {{ $club->phone }}</p>
			<p>Email Contact: {{ $club->email }}</p>
			<p>Website: {{ $club->website }}</p>
		</div>
		@endforeach

	</div>
	<div class="col-md-3">
		<hr>
		@if(Auth::check())
		<a class="btn btn-default sidebar-button" href="{{ URL::to('clubs/new') }}">Add Or Edit Your Club Info</a>
		@else
		<h3>Register</h3>
		<p>Create an account to add your club information</p>
		{{ Form::open(array('action'=>'UsersController@doRegister')) }}
		{{ Form::text('first_name', null, array('class'=>'form-control','placeholder'=>'First Name')) }}
		<br>
		{{ Form::text('last_name', null, array('class'=>'form-control','placeholder'=>'Last Name')) }}
		<br>
		{{ Form::text('email', null, array('class'=>'form-control','placeholder'=>'Enter Your Email')) }}
		<br>
		{{ Form::password('password', array('class'=>'form-control','placeholder'=>'Create a Password')) }}
		<br>
		{{ Form::submit('Register as a Coach', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
		@endif
		<hr>
		<ul class="list-group">
		@foreach($clubs as $club)		
		  <li class="list-group-item">
		  	{{ $club->name }}
		  </li>
		@endforeach
		</ul>
	</div>
</div>
@stop