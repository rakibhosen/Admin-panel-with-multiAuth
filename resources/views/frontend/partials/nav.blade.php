<section class="header_nav bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg  ">
            
            @php
                $logo =DB::table('site_logo')->first();
                @endphp
            <a  href="{{ route('index.page') }}"><img src="{{('image/site_logo/'.$logo->image)}}" alt="{{$logo->title}}" class="logo"></a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::routeIs('index.page') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('index.page') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   About Us
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
                    
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          
                          <ul class="nav flex-column">
                          <li class="nav-item {{ Request::routeIs('company.overview') ? 'active' : '' }}">
                            <a class="nav-link " href="{{route('company.overview')}}">Company OVerview</a>
                          </li>
                 
                        </ul>
                        </div>
                        <!-- /.col-md-4  -->
                        <div class="col-md-6">
                          <ul class="nav flex-column">
                          <li class="nav-item {{ Request::routeIs('company.management') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('company.management')}}"">Our Management</a>
                          </li>
                  
                        </ul>
                        </div>
           
                      </div>
                    </div>
                    <!--  /.container  -->
          
          
                  </div>
                </li>


                
                <li class="nav-item {{ Request::routeIs('notice_index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('notice_index') }}">Notice</a>
                </li>

                <li class="nav-item {{ Request::routeIs('event_index') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('event_index') }}">News & Events</a>
                </li>

                <li class="nav-item {{ Request::routeIs('contact_show') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact_show') }}">Contact Us</a>
                </li>
          
              </ul>
      
            </div>
          
          
          </nav>
    </div>

</section>


