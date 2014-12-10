@extends('_master')

@section('content')
<div class="container">
  <div class="row">
        <div class="col-sm-12">
            <legend>Add a Shopper</legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-sm-3 control-label">Family Role</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="role" name="role">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        <div class="col-sm-7">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Family Role</th>
                                </tr>
                            </thead>
                            <tbody></tbody> <!-- preview content goes here-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
                </div>                
            </div>
        </div>
  </div>
</div>
@stop

@section('javascript_info')

<script src="{{URL::asset('assets/js/person_create.js')}}"></script>

@stop