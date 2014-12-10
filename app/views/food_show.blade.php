@extends('_master')

@section('content')

	<h2>Tag: {{ $person->name }}</h2>

	<div>
	Family Role: {{ $person->family_role }}
	</div>

	<div>
	Created: {{ $person->created_at }}
	</div>

	<div>
	Last Updated: {{ $person->updated_at }}
	</div>

	<a href='/person/{{ $person->id }}/edit'>Edit</a>

	{{ Form::open(['method' => 'DELETE', 'action' => ['PersonController@destroy', $person->id]]) }}
		<a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
	{{ Form::close() }}

@stop