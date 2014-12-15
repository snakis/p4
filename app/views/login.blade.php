@extends('_master')

@section('no_login_content')

<h1>Log in</h1>
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