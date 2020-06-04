<section class="top_footer section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <h2><a href="#">Office Address</a></h2>
                @php
                    $address =DB::table('site_address')->first()
                @endphp
                <p>Email : {{$address->email}}</p>
                <p>Phone : {{$address->phone}}</p>
                <p>Address : {{$address->address}}</p>
            </div>

            <div class="col-md-3">
                <h2>
                <a href="{{route('company.overview')}}"> Overview</a>
                </h2>
                @php
                $overview =DB::table('company_overviews')->first()
            @endphp
            <p> {{ str_limit(strip_tags($overview->description), 200) }} </p>

  
            </div>
            <div class="col-md-3">
                <h2>
                <a href="{{route('company.overview')}}"> Mission</a>
                </h2>
                @php
                $mission =DB::table('missions')->first()
            @endphp
            <p> {{ str_limit(strip_tags($mission->description), 200) }} </p>

  
            </div>
            <div class="col-md-3">
                <h2>
                    <a href="#">
              Messages
            </a>
                </h2>
                @php
                $messages =DB::table('messages')->first()
            @endphp
            <p> {{ str_limit(strip_tags($messages->description), 200) }} </p>

  
            </div>
        </div>
    </div>
</section>
