@extends('_master')

@section('header_content')

@stop

@section('no_login_content')

<h1>Sign up</h1>

@foreach($errors->all() as $message)
  <div class='error'>{{ $message }}</div>
@endforeach

{{ Form::open(array('url' => '/signup')) }}

    {{ Form::label('email') }}
    {{ Form::text('email') }}

    {{ Form::label('password') }}
    {{ Form::password('password') }}
    <small>Min 4 characters</small>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

<br>
<a href="/signup">Already have an account? Log on!</a>

@stop