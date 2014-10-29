@extends('layout')

@section('content')

<div class="container movedown">
	<div class="col-md-9">

		<h2>Add A Club</h2>
		<hr>
		{{ Form::open(array('action'=>'ClubsController@doClubsCreate')) }}
		{{ Form::label('name', 'Club Name') }}
		{{ Form::text('name', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('coach', 'Coach Name') }}
		{{ Form::text('coach', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('location', 'Club City') }}
		{{ Form::text('location', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('email', 'Primary Email') }}
		{{ Form::text('email', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('location', 'Phone Contact') }}
		{{ Form::text('phone', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('location', 'Club Website') }}
		{{ Form::text('website', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::submit('Add Club', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
			
	</div>
</div>
@stop