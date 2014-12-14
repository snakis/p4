@extends('_master')

@section('header_content')


@stop

@section('content')

<br> <br> <br> <br>

<div class="container">
	<a href="#" class="btn btn-primary btn-xs pull-right" type="submit" data-title="add_new"  onclick="window.location='/food/create';"><b>+</b> Add more items</a>
<div class="row">
		
        
<div class="col-md-12">
  <h4>Family Shopping List</h4>
  <div class="table-responsive">
    <table id="mytable" class="table table-bordred table-striped">
                   
      <thead>                   
       <th><input type="checkbox" id="checkall" /></th>
       <th>Item</th>
       <th>Shopper</th>
       <th>Store</th>
       <th>Units</th>
       <th>Amount</th>
       <th>Purchased?</th>
       <th>Edit</th>
       <th>Delete</th>
     </thead>

    <tbody>
    
      @if(sizeof($foods) == 0)
      	<h1>No results</h1>

      @else
      	@foreach($foods as $food)
      	  <tr id={{$food['id']}}>
  		    <td><input type="checkbox" class="checkthis" /></td>
  		    <td><a href='/food/{{ $food['id']}}'>{{$food['food_type']}}</a></td>
  		    <td><a href='/person/{{$food['person']->id}}'>{{$food['person']->name}}</a></td>
  		    <td><a href='/store/{{$food['store']->id}}'>{{$food['store']->store_name}}</td>
          <td>{{$food['units']}}</td>
          <td>{{$food['amount']}}</td>
          <td>
            <?php
              if($food['purchased'] == 1){
                echo "yes";
              }
              else{
                echo "no";
              }
            ?>
          </td>

  		    <td><p><button class="btn btn-primary btn-xs" type="submit" data-title="Edit"  onclick="window.location='/food/{{$food['id']}}/edit';" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
          {{ Form::open(['method' => 'DELETE', 'action' => ['FoodController@destroy', $food->id]]) }}
            <td><p><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
          {{ Form::close() }}
  		    </tr>
		    @endforeach
      @endif

    </tbody>
        
  </table>
                
</div>            
</div>
</div>
</div>

@stop

@section('javascript_info')

<script src="{{URL::asset('assets/js/master_table.js')}}"></script>

@stop