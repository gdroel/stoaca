@extends('layout')

@section('content')
<div class="jumbotron jumbotron-clubs">
	<div class="container">
		<h1 class="jumbotron-h1 movedown-h1">Tournaments</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-9">
		
		@foreach($tournaments as $tournament)
		<div class="row tournament">
			<h2>{{ $tournament->name }}</h2>
			<hr>
			<h3>{{ $tournament->location}}</h3>
			<p>{{ $tournament->description }}</p>
			<a href="{{ $tournament->website }}">Website</a>
			<p>Register Start: {{ $tournament->register_start }}</p>
			<p>Register End: {{ $tournament->register_end }}</p>
			<p>Tournament Start: {{ $tournament->tournament_start }}</p>
			<p>Tournament End: {{ $tournament->tournament_end }}</p>
			</div>
		@endforeach
		
	</div>
</div>
@stop