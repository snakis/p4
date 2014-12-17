@extends('_master')

@section('no_login_content')

<div style='color: DimGray'>
	<h1>Log into to My Grocery List Manager <img class='logo' src='/images/grocery_image.jpg' alt='groceries'></h1>
</div>
<br>
{{ Form::open(array('url' => '/login')) }}

    {{ Form::label('email') }}
    {{ Form::text('email') }}

    {{ Form::label('password') }} 
    {{ Form::password('password') }}

    {{ Form::submit('Submit') }}

{{ Form::close() }}

<br>
<a href="/signup">Don't have an account? Sign up!</a>
    
@stop