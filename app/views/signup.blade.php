@extends('_master')

@section('header_content')

@stop

@section('no_login_content')

<div style='color: DimGray'>
	<h1>Sign Up for My Grocery List Manager <img class='logo' src='/images/grocery_image.jpg' alt='groceries'></h1>
</div>
<br>
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
<a href="/login">Already have an account? Log on!</a>

@stop