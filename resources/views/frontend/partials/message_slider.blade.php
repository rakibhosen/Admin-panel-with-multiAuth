<section class="message_slider section-padding animated fadeInDown id=" message_slider ">
    <div class="container ">
       <div class="message_slider-content ">
        {{-- <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-header">
                    <h2>Our <span class="welcome-text">Message</span></h2>
                </div>
            </div>
        </div> --}}
        <div class="row content-top-space">
        
        <div class=" col-md-8 ">
            <div class="row">
                <div class="col-md-6">
                    
                </div>
            </div>
            <div class="owl-carousel owl-theme message_slider_owl owl-dots ">
                 @php
                  $messages = DB::table('messages')->get();
                 @endphp

                @foreach ($messages as $message)
                    <div class="message_slider-item ">
                        <img src="{{ asset('image/message/'.$message->image) }}">
                        <h4>{{ $message->title }}</h4>
                        <p> {{ str_limit(strip_tags($message->description), 200) }} </p>


                 

                        
                        @if (strlen(strip_tags($message->description)) > 200)
                         <p class="text-center "> <a href="{{ route('message_show',$message->id) }}" class="card-btn ">Read more</a></p>
                        @endif
                    </div>
                @endforeach
              </div>
        </div>

        <div class="col-sm-4">
            <div class="sidebar-card">
                <div class="notice-section-header">
                    <div class="section-text">
                        Notice Bord
                    </div>
                </div>

                @foreach (App\Models\Notice::all() as $notice)
                <div class="section-body">
                    <div class="notice-text">
                        <a href="#" class="notice-link">
                            <span class="badge badge-info date-text">{{ $notice->from_date }}</span>
                            <span class="notice-dynamic">{{ $notice->title }}</span>
                        </a>
            
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        </div>
    </div>
</section>