@extends('_master')

@section('content')
  <h1>Add a New Item to Your List</h1>

  {{ Form::open(array('action' => 'FoodController@store')) }}

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
      {{ Form::text('person_id')}}
    </div>
    <div>
      {{ Form::label('store_id','Store') }}
      {{ Form::text('store_id')}}
    </div>
    <div>
      {{ Form::label('purchased','Purchased') }}
      {{ Form::number('purchased') }}
    </div>
    <br><br>
    {{ Form::submit('Add Item') }}

  {{ Form::close() }}
@stop
