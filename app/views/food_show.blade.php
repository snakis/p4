@extends('_master')

@section('content')

	<h2>Grocery Item: {{ $food->food_type }}</h2>

	<div>
	<b>Units</b>: {{ $food->units }}
	</div>

	<div>
	<b>Amount</b>: {{ $food->amount }}
	</div>

	<div>
	<b>Person</b>: {{ $food['person']->name }}
	</div>

	<div>
	<b>Store</b>: {{ $food['store']->store_name }}
	</div>

	<div>
	<b>Purchased</b>:
	{{{ $food->purchased ? 'Yes' : 'No'}}}
	</div>

	<div>
	<b>Created</b>: {{ $food->created_at }}
	</div>

	<div>
	<b>Last Updated</b>: {{ $food->updated_at }}
	</div>

	<a href='/food/{{ $food->id }}/edit'>Edit</a>

	{{ Form::open(['method' => 'DELETE', 'action' => ['FoodController@destroy', $food->id]]) }}
		<a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
	{{ Form::close() }}

@stop