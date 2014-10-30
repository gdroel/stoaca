@extends('layout')

@section('content')

<div class="container movedown">
	<div class="col-md-8 col-md-offset-2">
		<h2>Add a Tip</h2>
		<hr>
		{{ Form::open(array('action'=>'TipsController@doTipsCreate')) }}
		{{ Form::text('title', null, array('class'=>'form-control','placeholder'=>'Title')) }}
		<br>
		<textarea name="description" id="body" class="form-control">
  
		</textarea>
		<script>
		    CKEDITOR.replace('body');
		</script>
		<br>
		{{ Form::submit('Add Tip', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
	</div>
</div>
@stop