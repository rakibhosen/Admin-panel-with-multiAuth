<section class="mission_notice  section-padding animated slideInLeft" id="about">
    <!-- about heading.............. -->
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-header">
                    <h2>Our <span class="welcome-text">Mission</span></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- about content............. -->
    <div class="container content-top-space">
        <div class="row content-space">
            <div class="col-md-12 col-sm-12 ">
      

                @foreach (DB::table('missions')->take(1)->get() as $mission)
                    <div class="mission">
                        <div class="mission_show_img">
                            <img src="{{('image/mission/'.$mission->image)}}" alt="{{$mission->title}}" >
                        </div>
                   
                        <h3>{{ $mission->title }}</h3>
                    <p>{{ $mission->description }}</p>
                    </div>

                @endforeach
   

            </div>
            {{-- <div class="col-md-5 col-sm-12">
                <div class="notice">
          
                   @foreach (DB::table('notices')->take(1)->get() as $n)
                     <h3>{{ $n->title }}</h3> 
                      <p>{{ $n->description }}</p>
                   @endforeach
            
                </div>
            </div> --}}

        </div>
    </div>
</section>