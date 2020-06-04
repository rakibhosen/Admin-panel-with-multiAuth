@extends('admin.layout.admin_layout')
@section('admin_content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit social link</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
@include('admin.partials.messages')

        <form class="form-horizontal" method="POST" action="{{route('social.update',$social_link->id)}}" enctype="multipart/form-data">
          {{ method_field('PUT')}}
            {{ csrf_field() }}
              <fieldset>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Facebook</label>
                  <div class="controls">
                  <input type="text" class="span6 typeahead" id="typeahead" placeholder="Facebook link" name="facebook_link" value="{{$social_link->facebook_link}}">
                    
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="typeahead">Youtube </label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead" name="youtube_link" value="{{$social_link->youtube_link}}">
                    
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="typeahead">twitter </label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead" name="twitter_link" value="{{$social_link->twitter_link}}">
                    
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for="typeahead">linkein </label>
                  <div class="controls">
                    <input type="text" class="span6 typeahead" id="typeahead" name="linkedin_link" value="{{$social_link->linkedin_link}}">
                    
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