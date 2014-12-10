@extends('_master')

@section('content')

	<h2>Food Type: {{ $food->type }}</h2>

	<div>
	Units: {{ $food->units }}
	</div>

	<div>
	Amount: {{ $food->amount }}
	</div>

	<div>
	Person: {{ $food->person_id }}
	</div>

	<div>
	Store: {{ $food->store_id }}
	</div>

	<div>
	Purchased: {{ $food->purchased }}
	</div>

	<div>
	Created: {{ $food->created_at }}
	</div>

	<div>
	Last Updated: {{ $food->updated_at }}
	</div>

	<a href='/food/{{ $food->id }}/edit'>Edit</a>

	{{ Form::open(['method' => 'DELETE', 'action' => ['FoodController@destroy', $food->id]]) }}
		<a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
	{{ Form::close() }}

@stop