@extends('_master')

@section('content')

	<h2>View all Shoppers</h2>

	@foreach($persons as $person)

		<div>
			<a href='/person/{{ $person->id }}'>{{ $person->name }}</a>
		</div>

	@endforeach

	<br>
	<br>
	
	<a href="/person/create">Add a new shopper</a><br>

@stop