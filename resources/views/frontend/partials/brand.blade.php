<section class="brand section-padding animated fadeInDown id="brand ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 text-center ">
                 <div class="section-header ">
                 <h2><span class="contact-header ">Our </span><span class="welcome-text ">Brand</span></h2>
                 </div>
            </div>
        </div>
       <div class="brand-content  content-top-space">
        <div class="row ">

            <div class=" col-md-8 offset-md-2 ">
                <div class="owl-carousel owl-theme brand-owl owl-dots ">
                    @foreach ( DB::table('brands')->get() as $brand)
                    <div class="brand-item ">
                    <img src="{{asset('image/brand/'.$brand->image)}}">
                        <h4>{{ $brand->title }}</h4>
                     <p>{{$brand->description}}</p>
                    </div>
                    @endforeach
         

                    {{-- <div class="brand-item ">
                        <img src="assets/img/1.jpg ">
                        <h4>Rakib Hosen</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.At vero eos et accusamus et iusto odio .
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.At vero eos et accusamus et iusto odio</p>
                    </div> --}}
            </div>
            </div>
            </div>
        </div>
    </div>
</section>

