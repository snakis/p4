@extends('_master')

@section('content')

	<h2>Tag: {{ $store->store_name }}</h2>

	<div>
	Store Location: {{ $store->location }}
	</div>

	<div>
	Created: {{ $store->created_at }}
	</div>

	<div>
	Last Updated: {{ $store->updated_at }}
	</div>

	<a href='/store/{{ $store->id }}/edit'>Edit</a>

	{{ Form::open(['method' => 'DELETE', 'action' => ['StoreController@destroy', $store->id]]) }}
		<a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
	{{ Form::close() }}

@stop