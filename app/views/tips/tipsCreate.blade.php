@extends('layout')
@section('title')
Stoa California | Add New Coach's Tip
@stop
@section('content')
<div class="small-bg"></div>
<div class="container movedown">
	<div class="col-md-8 col-md-offset-2">

		<h2>Add a Tip</h2>
		<hr>
		@if($errors->has())
		   @foreach ($errors->all() as $error)
		      <div class="alert alert-danger" role="alert">{{ $error }}</div>
		  @endforeach
		@endif
		{{ Form::open(array('action'=>'TipsController@doTipsCreate')) }}
		{{ Form::text('title', null, array('class'=>'form-control','placeholder'=>'Title')) }}
		<br>
		<textarea name="description" id="body" class="form-control">
  
		</textarea>
		<script>
		    CKEDITOR.replace('body');
		</script>
		<br>
		{{ Form::hidden('user_id', Auth::user()->id)}}
		{{ Form::submit('Add Tip', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
	</div>
</div>
@stop