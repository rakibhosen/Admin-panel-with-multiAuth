@extends('frontend.layout.master')
@push('name')

@endpush

@section('content')

<section class="management section-padding">
    <!-- about heading.............. -->
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-header">
                    <h2>Company <span class="welcome-text">management</span></h2>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs content-top-space" role="tablist">
         @foreach ($managements as $management)
             
            <li class="nav-item tab_item">
              <a class="nav-link  {{ $loop->first ? ' active' : '' }} " href="#profile-{{ $management->id }}" role="tab" data-toggle="tab" aria-selected="true">  
                <img src="{{('image/management/'.$management->image)}}" alt="{{$management->title}}" class="img-fluid" height="125px" width="100px">
            </a>
            </li>
            @endforeach
        </ul>
            
            <!-- Tab panes -->
         
            <div class="tab-content">
                @foreach ($managements as $management)
            <div role="tabpanel" class="tab-pane  {{ $loop->first ? ' active' : '' }}" id="profile-{{ $management->id }}">
                {{-- <div class="row">
                    <div class="col-md-4">
                        <div class="management_img">
                          <img src="{{('image/management/'.$management->image)}}" alt="{{$management->title}}" class="img-fluid">
                        </div>
                       
                    </div>
                    <div class="col-md-7">
                    <h2>{{$management->title}}</h2>
                    <h3>{{$management->title}}</h3>
                    <p>{{$management->description}}</p>

                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="about-left">
                            <img src="{{('image/management/'.$management->image)}}" alt="{{$management->title}}" class="img-fluid">
       
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 ">
                        <div class="about-right">
                            <h2><span id="management_name">{{$management->name}}</span></h2>
                            <h4><span id="management_title">{{$management->title}}</span></h4>
                            <p><span id="management_description">{{$management->description}}</span></p>
                           
                        </div>
                    </div>
                </div>









            </div>
            @endforeach
            </div>



    </div>




</section>

@endsection
@push('script')

@endpush