@extends('_master')

@section('content')

	{{ Form::model($food, ['method' => 'put', 'action' => ['FoodController@update', $food->id]]) }}

		<h3>Update records for: {{ $food->food_type }}</h3>

	    <div>
	      {{ Form::label('food_type','Food Type') }}
	      {{ Form::text('food_type') }}
	    </div>
	    <div>
	      {{ Form::label('units','Units') }}
	      {{ Form::text('units') }}
	    </div>
	    <div>
	      {{ Form::label('amount','amount') }}
	      {{ Form::number('amount') }}
	    </div>
	    <div>
	      {{ Form::label('person_id','Person') }}
	      {{ Form::select('person_id', $persons) }}
	    </div>
	    <div>
	      {{ Form::label('store_id','Store') }}
	      {{ Form::select('store_id', $stores) }}
	    </div>
	    <div>
	      {{ Form::label('purchased','Purchased') }}
	      {{ Form::select('purchased', array('1' => 'Yes', '0' => 'No'))}}
	    </div>
	      {{ Form::hidden('user_id', Auth::id()) }}
	      
		{{ Form::submit('Update') }}

	{{ Form::close() }}

@stop