@extends('layout')

@section('content')
<div class="bg1">
<div class="jumbotron">
	<div class="container">
		<h1 class="movedown-less-h1">Stoa California</h1>
		<p class="jumbotron-text">Christian Homeschool Speech & Debate for California</p>
	</div>
</div></div>
<div class="container home-page">
	<div class="col-md-8">
			<div class="main-content">
				<h1>Page Updates</h1>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tem
				</p>
			</div>
			<div>
				<div class="col-md-6">
					<div class="tournaments-box">
						<h2>Tournaments</h2>
					</div>
				</div>

				<div class="col-md-6">
					<div class="tips-box">
						<h2>Coaching Tips</h2>
					</div>
				</div>
			</div>
	</div>
	<div class="col-md-4 sidebar">
		<h3>Login</h3>
		{{ Form::open() }}
		{{ Form::text('email',null,array('class'=>'form-control')) }}
		<br>
		{{ Form::password('password', array('class'=>'form-control')) }}
		<br>
		{{ Form::submit('Login', array('class'=>'btn btn-default')) }}
		{{ Form::close() }}
		<br>
		<h3>All Clubs</h3>
		<hr>
		<ul class="list-group">
			<li class="list-group-item">Rhetoric</li>
			<li class="list-group-item">CLASH</li>
			<li class="list-group-item">Fartitude</li>
			<li class="list-group-item">Fortitude</li>
		</ul>
	</div>
</div>
@stop