@extends('layout')

@section('content')
<div class="jumbotron jumbotron-clubs">
	<div class="container">
		<h1 class="jumbotron-clubs-h1 movedown-h1">Clubs</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-9">
		<div class="col-md-6">
			<hr>
			<h2>Rhetoric</h2>
			<p>Coach: Rebecca Wyer</p>
			<p>Contact: 805-555-5555</p>
			<p>Website: rhetoricdebate.com</p>
		</div>
		<div class="col-md-6">
			<hr>
			<h2>Rhetoric</h2>
			<p>Coach: Rebecca Wyer</p>
			<p>Contact: 805-555-5555</p>
			<p>Website: rhetoricdebate.com</p>
		</div>
		<div class="col-md-6">
			<hr>
			<h2>Rhetoric</h2>
			<p>Coach: Rebecca Wyer</p>
			<p>Contact: 805-555-5555</p>
			<p>Website: rhetoricdebate.com</p>
		</div>
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