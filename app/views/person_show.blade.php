@extends('_master')

@section('content')

	<h2>Tag: {{ $person->name }}</h2>

	<div>
	<b>Family Role</b>: {{ $person->family_role }}
	</div>

	<div>
	<b>Created</b>: {{ $person->created_at }}
	</div>

	<div>
	<b>Last Updated</b>: {{ $person->updated_at }}
	</div>

	<a href='/person/{{ $person->id }}/edit'>Edit</a>

	{{ Form::open(['method' => 'DELETE', 'action' => ['PersonController@destroy', $person->id]]) }}
		<a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
	{{ Form::close() }}

@stop