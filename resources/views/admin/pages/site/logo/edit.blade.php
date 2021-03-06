@extends('admin.layout.admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add site_logo</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
@include('admin.partials.messages')

        <form class="form-horizontal" method="POST" action="{{route('logo.update',$site_logo->id)}}" enctype="multipart/form-data">
          {{ method_field('PUT')}}
            {{ csrf_field() }}
              <fieldset>
                <div class="control-group">
                  <label class="control-label" for="typeahead">Title </label>
                  <div class="controls">
                  <input type="text" class="span6 typeahead" id="typeahead" name="title" value="{{$site_logo->title}}">
                    
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label" for="typeahead">Image </label>
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="file" class="form-control" name="image" id="site_logo_image" >
                       </div>
                      <div class="col-md-6">
                        <img class="" src="{{ asset('image/site_logo/'.$site_logo->image) }}" alt="{{ $site_logo->title }}" height="70px" width="80px">
                      </div>
                    </div>
                   
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