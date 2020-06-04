<div class="contact-section section-padding animated fadeIn " id="contact ">

    <!-- section content -->
    <div class="container content-top-space ">
        @include('frontend.partials.messages')
    <form action="{{route('contact.store')}} " method="post">
        @csrf
        <div class="row ">
            <div class="col-md-10 offset-md-1 ">
                <div class="row ">
                    <div class="col-md-6 ">
                         <input type="email" name="email" class="form-control" placeholder=" Your Email here ">
                    </div>

                    <div class="col-md-6 ">
                        <input type="text" name="subject" class="form-control" placeholder=" Your subject here ">
                    </div>
                </div>

                <div class="row ">
                      <div class="col-md-12 ">
                          <textarea class="form-control" placeholder="Your Message" name="description"></textarea>
                      </div>
                      <div class="col-md-12 ">
                         <button type="submit ">SendMessage</button>
                      </div>
            </div>
        </div>
    </div>
    </form>
</div>
</div