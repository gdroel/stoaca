@extends('layout')

@section('title')
Stoa California
@stop
@section('content')
<div class="bg1">
<div class="jumbotron">
	<div class="container">
		<h1 class="movedown-less-h1">Stoa California</h1>
		<p class="jumbotron-text">Christian Homeschool Speech & Debate for California</p>
	</div>
</div></div>
<div class="container home-page">
	<div class="col-md-8">
		<div class="row tournaments-box">
			<div class="container">
				<h2>Upcoming Tournaments</h2>
			</div>
			<hr>
			@foreach($tournaments as $tournament)
				<div class="col-md-6">
					<h3>{{ $tournament->name }}</h3>
					<p>{{ $tournament->location }}</p>
					<p><a href="{{ $tournament->website}} ">{{ $tournament->website }}</a></p>
				</div>
			@endforeach
			<p><a class="pull-right" href="{{ URL::to('tournaments') }}">See More...</a></p>
		</div>
		<div class="row tournaments-box margin-bottom">
			<div class="container">
				<h2>Latest Coaching Tip</h2>
				<hr>
			</div>
			<div class="col-md-12">
				<h3>{{ $tip->title }}</h3>
				<p>{{ $tip->description }}</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 sidebar">
		@if(!Auth::check())
		<h3>Login</h3>
		{{ Form::open(array('action'=>'UsersController@doLogin')) }}
		{{ Form::text('email',null,array('class'=>'form-control')) }}
		<br>
		{{ Form::password('password', array('class'=>'form-control')) }}
		<br>
		{{ Form::submit('Login', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
		<br>
		@endif
		<h3>All Clubs</h3>
		<hr>
		<ul class="list-group">
			@foreach($clubs as $club)
			<li class="list-group-item">{{ $club->name }}</li>
			@endforeach
		</ul>
	</div>
</div>
@stop