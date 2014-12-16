@extends('_master')

@section('content')

	{{ Form::model($person, ['method' => 'put', 'action' => ['PersonController@update', $person->id]]) }}

		<h3>Update records for: {{ $person->name }}</h3>

	    <div>
	      {{ Form::label('name','Shopper Name') }}
	      {{ Form::text('name') }}
	    </div>
	    <div>
	      {{ Form::label('family_role','Family Role') }}
	      {{ Form::text('family_role') }}
	    </div>
	      {{ Form::hidden('user_id', Auth::id()) }}
		{{ Form::submit('Update') }}

	{{ Form::close() }}

@stop