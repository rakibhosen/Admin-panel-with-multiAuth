<section class="about section-padding animated slideInLeft" id="about">
    <!-- about heading.............. -->
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-header">
                    <h2>Company <span class="welcome-text">Overview</span></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- about content............. -->
    <div class="container content-top-space">
        <div class="row">
      
            <div class="col-md-6 col-sm-12 ">
                @foreach (DB::table('missions')->take(1)->get() as $mission)
                <div class="about-right">
                    <h3>{{ $mission->title }}</h3>
                <p>{{$mission->description}}</p>
                    
                </div>
                @endforeach
            </div>


            <div class="col-md-6 col-sm-12 ">
                @foreach (DB::table('company_overviews')->take(1)->get() as $about)
                <div class="about-right">
                    <h3>{{ $about->title }}</h3>
                    <p>{{$about->description}}</p>
                  
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>