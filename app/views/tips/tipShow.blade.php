@extends('layout')
@section('title')
{{ $tip->title }}
@stop
@section('content')
<div class="jumbotron jumbotron-clubs">

</div>
<div class="container moveup">
	<div class="col-md-9 tip">
		<h2>{{ $tip->title }}</h2>
		<p class="gray"><span class="glyphicon glyphicon-user"></span> &nbsp{{ $tip->user->first_name }} 
			{{ $tip->user->last_name }}&nbsp
			<span class="glyphicon glyphicon-time"></span>&nbsp {{ $tip->updated_at->format('g:ia M j') }}</p>
		<hr>
		<p>{{ $tip->description }}</p>
	</div>
	<div class="col-md-3">
		<ul class="list-group">
			<li class="list-group-item list-title">Check Out Some other Tips!</li>
			@foreach($tips as $tip)
			<li class="list-group-item">
				<a href="{{ action('TipsController@showTip', $tip->id) }}">{{ $tip->title }}</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>
@stop