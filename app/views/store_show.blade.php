@extends('_master')

@section('content')

	<h2>Store Name: {{ $store->store_name }}</h2>

	<div>
	<b>Store Location</b>: {{ $store->location }}
	</div>

	<div>
	<b>Created</b>: {{ $store->created_at }}
	</div>

	<div>
	<b>Last Updated</b>: {{ $store->updated_at }}
	</div>

	<a href='/store/{{ $store->id }}/edit'>Edit</a>

	{{ Form::open(['method' => 'DELETE', 'action' => ['StoreController@destroy', $store->id]]) }}
		<a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
	{{ Form::close() }}

@stop