@extends('_master')

@section('content')
  <h1>Add a New Store</h1>

  {{ Form::open(array('action' => 'StoreController@store')) }}

    <div>
      {{ Form::label('store_name','Store Name') }}
      {{ Form::text('store_name') }}
    </div>
    <div>
      {{ Form::label('location','Location') }}
      {{ Form::text('location') }}
    </div>

    <br><br>
    {{ Form::submit('Add Store') }}

  {{ Form::close() }}
@stop
