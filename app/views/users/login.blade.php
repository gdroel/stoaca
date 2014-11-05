@extends('layout')
@section('title')
Stoa California | Login
@stop
@section('content')
<div class="small-bg"></div>
<div class="container movedown">
	<div class="col-md-4 col-md-offset-4">
		<h2>Login</h2>
		<hr>
		{{ Form::open(array('action'=>'UsersController@doLogin')) }}
		{{ Form::text('email', null, array('class'=>'form-control','placeholder'=>'Email')) }}
		<br>
		{{ Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) }}
		<br>
		{{ Form::submit('login', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
	</div>
</div>
@stop