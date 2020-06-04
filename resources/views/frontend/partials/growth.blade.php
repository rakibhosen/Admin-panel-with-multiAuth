<section class="growth_section section-padding animated fadeIn">
    <div class="container">
        <div class="row">
            @foreach ( DB::table('counters')->take(4)->get() as $counter)
            <div class="col-lg-3 col-md-6 ">
                <div class="growth_content ">
                    <img src="{{asset('image/counter/'.$counter->image)}}">
                    <h3 class="counter">{{ $counter->count }}</h3>
                    <p>{{ $counter->title }}</p>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>