@extends('_master')

@section('header_content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{URL::asset('assets/css/signin.css')}}" rel="stylesheet">
    <title>Signin Template for Bootstrap</title>

@stop

@section('content')

<div class="container">

<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please sign up <small>It's free!</small></h3>
      </div>
      <div class="panel-body">
        <form role="form">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="family_name" class="form-control input-sm" placeholder="Family Name">
            </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="shopper_name" class="form-control input-sm" placeholder="Your First Name">
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password" class="form-control input-sm" placeholder="Password">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
              </div>
            </div>
          </div>

          <input type="submit" value="Register" class="btn btn-info btn-block">

        </form>
      </div>
    </div>
  </div>
</div>

</div>
@stop