@extends('admin.layout.admin_layout')
@push('css')

<style>
    .inline_blck{
        display: inline-block!important;
    }
    .table-bordered>tbody>tr>td{
        text-align: center;
    }
</style>
    
@endpush
@section('admin_content')

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Slider</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
@include('admin.partials.messages')

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th>Image</th>
                      <th>title</th>
                      <th>Description</th>
                      <th>priority</th>
                
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                  @foreach ($sliders as $slider)
                      
                 
                <tr>
                    <td>   <img class="" src="{{ asset('image/slider/'.$slider->image) }}" alt="{{ $slider->title }}" height="70px" width="80px"></td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>{{ $slider->priority }}</td>
       
                   
       

                    <td class="center">

                   

                       <a class="btn btn-info" href="{{route('slider.edit',$slider->id)}}">
                            <i class="halflings-icon white edit"></i>  
                        </a>

                        <form class="inline_blck" action="{{ route('slider.destroy',$slider->id)}}" method="POST">
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
    </div><!--/span-->

</div><!--/row-->

@push('script')

@endpush

@endsection
