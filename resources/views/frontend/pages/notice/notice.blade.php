@extends('frontend.layout.master')
@section('content')

    <div class="event_page_img">
      
        <div class="container top_200">
            <!-- blog header -->
              <div class="row ">
                <div class="col-md-12 col-md-12 text-center ">
                      <div class="section-header ">
                     <h2> <span class="welcome-text ">Notice</span></h2>
                     </div>
                </div>
            </div>
        </div>

</div>

<div class="event-section section-padding wow fadeIn " id="blog ">
    <div class="container ">
        <!-- blog header -->
          {{-- <div class="row ">
            <div class="col-md-12 col-md-12 text-center ">
                  <div class="section-header ">
                 <h2>News <span class="welcome-text ">& </span>Events</h2>
                 </div>
            </div>
        </div> --}}
        <!-- blog content -->
        <div class="row content-top-space ">
            @foreach ( $notices as $notice)
                <div class="col-lg-4 col-md-6 mt-4 ">
                    <div class="card card-img ">
                    
                            <div class="card-body ">
                                <h4 class="card-title ">{{ $notice->title }}</h4>
                                <p class="card-text ">{{ str_limit(strip_tags($notice->description), 100) }}</p>
                                @if (strlen(strip_tags($notice->description)) > 100)
                                <p class="text-center "> <a href="{{ route('notice_show',$notice->id) }}" class="card-btn ">Read more</a></p>
                                @endif

                            </div>
                    </div>
                </div>
            @endforeach
            {{ $notices->links() }}
        </div>

    </div>
</div>



@endsection