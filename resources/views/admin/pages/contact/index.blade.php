@extends('admin.layout.admin_layout')
@push('css')

<style>
    .inline_blck{
        display: inline-block;
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
            <h2><i class="halflings-icon user"></i><span class="break"></span>contact</h2>
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
                 
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Subject</th>
            
                
                      <th>Actions</th>
                  </tr>
              </thead>   
              <tbody>
                  @foreach ($contacts as $contact)
                      
                 
                <tr>
                    
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                   
       
                   
       

                    <td class="center">

                        @if ($contact->is_seen == 1)
                        <a class="btn btn-success" >
                            Seen  
                        </a>
                        @else
                        <a class="btn btn-warning" >
                           Unseen
                        </a>
                        @endif

                   

                       <a class="btn btn-info" href="{{route('contact.show',$contact->id)}}">
                            <i class="halflings-icon white zoom-in"></i>  
                        </a>

                        <form class="inline_blck" action="{{ route('contact.destroy',$contact->id)}}" method="POST">
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
