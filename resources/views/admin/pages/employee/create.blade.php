@extends('admin.layout.admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add mission</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
@include('admin.partials.messages')
 
        <form class="form-horizontal" method="POST" action="{{route('employee.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
              <fieldset>
                <div class="control-group">
                  <label class="control-label" for="typeahead">Name </label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead" name="name">
                    
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label" for="typeahead">Sell</label>
                  <div class="controls">
                    <input type="number" class="span6 typeahead" id="typeahead" name="sell">
                    
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Image </label>
                  <div class="controls">
                   <input type="file" class="form-control" name="image" id="image" > 
                  </div>
                </div>
  

       

                  

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection