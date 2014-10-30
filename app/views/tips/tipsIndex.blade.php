@extends('layout')

@section('content')
<div class="jumbotron jumbotron-clubs">
	<div class="container">
		<h1 class="jumbotron-clubs-h1 movedown-h1">Coach's Tips</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-8">
		@foreach($tips as $tip)
			<div class="tip">
				<h3 class="inline">{{ $tip->title }}</h3><p class="inline pull-right gray"><span class="glyphicon glyphicon-user"></span> &nbsp{{ $tip->user->first_name }} {{ $tip->user->last_name }}&nbsp
				 <span class="glyphicon glyphicon-time"></span>&nbsp {{ $tip->updated_at->format('g:ia M j') }}</p>
				 <hr>
				<p>{{ str_limit($tip->description, $limit = 1000, $end = '...') }}</p>
                <p><a href="{{ action('TipsController@showTip', $tip->id) }}">Read More →</a></p>
			</div>
			<br>
		@endforeach
	</div>
	<div class="col-md-4">
		@if(Auth::check())
		<a class="btn btn-default sidebar-button">Add a Tip</a>
		<hr>
		@endif	
		<ul class="list-group">
			@foreach($tips as $tip)
			<li class="list-group-item">{{ $tip->title }}</li>
			@endforeach
		</ul>
	</div>
</div>
@stop