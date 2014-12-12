@extends('_master')

@section('header_content')

@stop

@section('content')

<div class="container">

  {{ Form::open(array('action' => 'FoodController@store')) }}

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add New Grocery Item</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="food_type">Grocery Item</label>
  <div class="controls">
    <input id="food_type" name="food_type" type="text" placeholder="broccoli" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="units">Units</label>
  <div class="controls">
    <input id="units" name="units" type="text" placeholder="heads" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="amount">Amount</label>
  <div class="controls">
    <input id="amount" name="amount" type="text" placeholder="2" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="person_id">Person</label>
  <div class="controls">
    {{Form::select('person_id', $persons)}}
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="store_id">Store</label>
  <div class="controls">
    {{Form::select('store_id', $stores)}}
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="purchased">Purchased?</label>
  <div class="controls">
    <label class="checkbox" for="purchased-0">
      <input type="checkbox" name="purchased" id="purchased-0" value="1">
      Yes
    </label>
    <label class="checkbox" for="purchased-1">
      <input type="checkbox" name="purchased" id="purchased-1" value="0">
      No
    </label>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Add to my list!</button>
  </div>
</div>

</fieldset>
</form>
</div>


@stop
