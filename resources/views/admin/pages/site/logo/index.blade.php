@extends('admin.layout.admin_layout')
@push('css')

<style>
    .inline_blck{
        display: inline-block;
    }
    .table-bordered>tbody>tr>td{
        text-align: center;
    }
    .create_logo{
      display: inline-block;
      float: right;
    }
</style>
    
@endpush
@section('admin_content')

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Logo</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>

             

            </div>
           
           
        </div>
        <div class="box-content">
        <p class="create_logo">   <a href="{{route('logo.create')}}" data-toggle="modal" class="btn btn-primary">Create</a></p>
            @include('admin.partials.messages')
  
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                 
                    <th>Image</th>
                    <th>Title</th>
                   
            
                
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                  @foreach ($site_logos as $site_logo)
                      
                 
                <tr>
                    <td>   <img class="" src="{{ asset('image/site_logo/'.$site_logo->image) }}" alt="{{ $site_logo->title }}" height="70px" width="80px"></td>
                    <td>{{ $site_logo->title }}</td>
            
                    <td class="center">
                       <a class="btn btn-info" href="{{route('logo.edit',$site_logo->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>

                        <form class="inline_blck" action="{{ route('logo.destroy',$site_logo->id)}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                               
                            <button type="submit" class="btn btn-danger"> <i class="halflings-icon white trash"></i> </button>
                  
                        </form>
                    </td>

                </tr>
                @endforeach
              </tbody>
          </table>  
          

  
</div>







        </div>
    </div><!--/span-->

</div><!--/row-->

@push('script')

@endpush

@endsection
