@extends('layout')
@section('title')
Stoa California | Tournaments
@stop
@section('content')
<div class="jumbotron jumbotron-clubs">
	<div class="container">
		<h1 class="jumbotron-h1 movedown-h1">Tournaments</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-8">
		
		@foreach($tournaments as $tournament)
		<div class="row tournament">
			<h2>{{ $tournament->name }}</h2>
			<hr>
			<h3>Location: {{ $tournament->location}}</h3>
			<p><a href="{{ $tournament->website }}">Tournament Website</a></p>
			<p>{{ $tournament->description }}</p>
			<table class="table">
				<thead>
					<tr>
						<th>Dates</th>
						<th>Start</th>
						<th>End</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Registration</td>
						<td>{{ $tournament->register_start->format('g:ia M j, Y') }}</td>
						<td>{{ $tournament->register_end->format('g:ia M j, Y') }}</td>
					</tr>
					<tr>
						<td>Tournament</td>
						<td>{{ $tournament->tournament_start->format('M j, Y') }}</td>
						<td>{{ $tournament->tournament_end->format('M j, Y') }}</td>
					</tr>
				</tbody>
			</table>

			</div>
		@endforeach
		<ul class="pagination">
		{{ $tournaments->links() }}
		</ul>
	</div>
	<div class="col-md-4">
		@if(Auth::check())
			<a href="{{ URL::to('tournaments/new') }}" class="btn btn-default sidebar-button">Add A Tournament</a>
					<hr>
		@endif
		<h3>Tournaments</h3>
		<hr>
		<ul class="list-group">
		@foreach($tournaments as $tournament)
			<li class="list-group-item">{{ $tournament->name }}</li>
		@endforeach
		</ul>
	</div>
</div>
@stop