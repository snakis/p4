@extends('_master')

@section('content')

	<h2>View all Stores</h2>

	@foreach($stores as $store)

		<div>
			<a href='/store/{{ $store->id }}'>{{ $store->store_name }}</a>
		</div>

	@endforeach
	
	<br><br>

	<a href="/food/create">Add a new grocery item</a><br>

@stop