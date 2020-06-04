@extends('admin.layout.admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add brand</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
@include('admin.partials.messages')
 
        <form class="form-horizontal" method="POST" action="{{route('address.update',$address->id)}}" enctype="multipart/form-data">
          {{ method_field('PUT')}}
            {{ csrf_field() }}
              <fieldset>
                <div class="control-group">
                  <label class="control-label" for="typeahead">Email </label>
                  <div class="controls">
                  <input type="email" class="span6 typeahead" id="typeahead" name="email" value="{{$address->email}}">
                    
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Phone </label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead" name="phone" value="{{$address->phone}}">
                    
                  </div>
                </div>

                
         
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2" >Address</label>
                  <div class="controls">
                    <textarea class="cleditor" id="textarea2" rows="3" name="address">{{$address->address}}</textarea>
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