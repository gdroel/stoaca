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
	<div class="col-md-3 sidebar">
		<h3>Login</h3>
		{{ Form::open() }}
		{{ Form::text('email',null,array('class'=>'form-control')) }}
		<br>
		{{ Form::password('password', array('class'=>'form-control')) }}
		{{ Form::submit('Login', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
	</div>
</div>
@stop