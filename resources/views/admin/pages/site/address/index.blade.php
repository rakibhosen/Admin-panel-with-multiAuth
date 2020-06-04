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
            <h2><i class="halflings-icon user"></i><span class="break"></span>Address</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>

             

            </div>
           
           
        </div>
        <div class="box-content">
        <p class="create_logo">   <a href="{{route('address.create')}}" data-toggle="modal" class="btn btn-primary">Create</a></p>
            @include('admin.partials.messages')
  
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                 
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                   
            
                
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                  @foreach ($site_addresess as $address)
                      
                 
                <tr>
                 
                    <td>{{ $address->email }}</td>
                    <td>{{ $address->phone }}</td>
                    <td>{{ $address->address }}</td>
            
                    <td class="center">
                       <a class="btn btn-info" href="{{route('address.edit',$address->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>

                        <form class="inline_blck" action="{{ route('address.destroy',$address->id)}}" method="POST">
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
