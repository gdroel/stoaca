@extends('layout')

@section('content')
<div class="container movedown">
	<div class="col-md-4 col-md-offset-4">
		<h2>Register</h2>
		<hr>
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
	</div>
</div>
@stop