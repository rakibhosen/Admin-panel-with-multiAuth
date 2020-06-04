<section class="slider">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        @php
        $sliders =DB::table('sliders')->get() ;
    @endphp
        <!-- The slideshow -->
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                <img src="{{ asset('image/slider/'.$slider->image) }}" alt="{{ $slider->title }}"  class="img-responsive ">
                <div class="carousel-caption slider_caption">
                   
                    <p>{{ $slider->description }}</p>
                    
                </div>
            </div>

            @endforeach


        </div>



        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

</section>




{{-- <section class="slider">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
                  @php
                        $sliders =DB::table('sliders')->get() ;
                    @endphp
        <!-- The slideshow -->
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                <img src="{{ asset('image/slider/'.$slider->image) }}" alt="{{ $slider->title }}"  class="img-responsive ">
                <div class="carousel-caption caption">
                   
                    <p> {{ $slider->description }}</p>
                    
                </div>
            </div>

            @endforeach


        </div>



        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>

</section> --}}