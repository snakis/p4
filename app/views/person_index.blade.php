@extends('_master')

@section('content')

	<h2>View all Shoppers</h2>

	@foreach($persons as $person)

		<div>
			<a href='/person/{{ $person->id }}'>{{ $person->name }}</a>
		</div>

	@endforeach

@stop