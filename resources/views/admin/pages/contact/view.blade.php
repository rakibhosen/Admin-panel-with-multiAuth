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
        <div class="span5 noMarginLeft">
					
            <div class="message dark">
                
                <div class="header">
                    <h1>"{{ $contact->subject }}.."</h1>
                    <div class="from"><i class="halflings-icon user"></i> <b>{{ $contact->email }}</b> </div>
                    <div class="date"><i class="halflings-icon time"></i> <b> {{$contact->created_date}} </b></div>
                    
                    <div class="menu"></div>
                    
                </div>
                
                <div class="content">
                    <p>
                        {{ $contact->description }}
                    </p>
     	
                </div>
                

                

                
            </div>	
            
        </div>


        </div>

        </div>
    </div><!--/span-->

</div><!--/row-->

@push('script')

@endpush

@endsection
