@extends('_master')

@section('content')
  <h1>Add a New Shopper</h1>

  {{ Form::open(array('action' => 'PersonController@store')) }}

    <div>
      {{ Form::label('name','Shopper Name') }}
      {{ Form::text('name') }}
    </div>
    <div>
      {{ Form::label('family_role','Family Role') }}
      {{ Form::text('family_role') }}
    </div>

    <br><br>
    {{ Form::submit('Add Shopper') }}

  {{ Form::close() }}
@stop

@section('javascript_info')

<script src="{{URL::asset('assets/js/person_create.js')}}"></script>

@stop