@extends('layout')

@section('content')

<div class="container movedown">
	<div class="col-md-9">

		<h2>Edit your Club Info</h2>
		<hr>
		{{ Form::open(array('action'=>'ClubsController@doClubsCreate')) }}
		{{ Form::label('name', 'Club Name') }}
		{{ Form::text('name', $club->name, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('coach', 'Coach Name') }}
		{{ Form::text('coach', $club->coach, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('location', 'Club City') }}
		{{ Form::text('location', $club->location, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('email', 'Primary Email') }}
		{{ Form::text('email', $club->email, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('location', 'Phone Contact') }}
		{{ Form::text('phone', $club->phone, array('class'=>'form-control')) }}
		<br>
		{{ Form::label('location', 'Club Website') }}
		{{ Form::text('website', null, array('class'=>'form-control')) }}
		<br>
		{{ Form::hidden('user_id', Auth::user()->id) }}
		{{ Form::submit('Add Club', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
			
	</div>
</div>

@stop