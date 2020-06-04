<section class="client section-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="client_img">
                    <h2>Our Clients</h2>
           
                 <div class="row">
                    @foreach ( DB::table('clients')->get() as $client)
                        <div class="col-md-4 col-6">
                            <div class="client_img_inner">
                            <img src="{{ asset('image/client/'.$client->image) }}" width="100%">
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- @foreach ( DB::table('clients')->get() as $client)
                      <div class="client_img_inner">  <img src="{{ asset('image/client/'.$client->image) }}" width="100%"></div>
                    @endforeach --}}
               
                </div>
            </div>

            <!-- client slider -->
            <div class="col-md-6">
                <div class="client_slider">
                    <h2>What Client Say</h2>
                    <div class="owl-carousel owl-theme client_slider_item">
                        @foreach ( DB::table('clients')->get() as $client)
                            <div class="item">
                                <div class="card">
                                    <p>{{ $client->description }}</p>

                                    <div class="client_slider_logo">
                                        <div class="row">
                                            <div class="col-md-2"><img src="{{ asset('image/client/'.$client->image) }}" width="100%" class="responsive_img"></div>
                                            <div class="col-md-10">
                                                <p>{{ $client->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

  
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>