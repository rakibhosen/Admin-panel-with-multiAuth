@extends('admin.layout.admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add event</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
@include('admin.partials.messages')
 
        <form class="form-horizontal" method="POST" action="{{route('event.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
              <fieldset>
                <div class="control-group">
                  <label class="control-label" for="typeahead">Title </label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead" name="title">
                    
                  </div>
                </div>


         
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2" >Description</label>
                  <div class="controls">
                    <textarea class="cleditor" id="textarea2" rows="3" name="description"></textarea>
                  </div>
                </div>

       



                <div class="control-group">
                  <label class="control-label" for="typeahead">Image </label>
                  <div class="controls">
                   <input type="file" class="form-control" name="image" id="event_image" > 
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