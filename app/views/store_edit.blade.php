@extends('_master')

@section('content')

	{{ Form::model($store, ['method' => 'put', 'action' => ['StoreController@update', $store->id]]) }}

		<h3>Update records for: {{ $store->name }}</h3>

	    <div>
	      {{ Form::label('store_name','Store Name') }}
	      {{ Form::text('store_name') }}
	    </div>
	    <div>
	      {{ Form::label('location','Location') }}
	      {{ Form::text('location') }}
	    </div>

		{{ Form::submit('Update') }}

	{{ Form::close() }}

@stop