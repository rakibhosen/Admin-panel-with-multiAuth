        <!--==================================================================-->
        <script type="text/javascript " src="{{ asset('frontend/assets/js/jquery-3.2.0.min.js') }} "></script>
        <script>window.jQuery || document.write('<script src="frontend/assets/js/vendor/jquery-1.12.0.min.js "><\/script>')</script>
        <!--=== All Plugin ===-->
       
        <script type="text/javascript " src="{{ asset('frontend/assets/js/plugin/wow.min.js') }} "></script>
        <script type="text/javascript " src="{{ asset('frontend/assets/js/plugin/mixitup.min.js ') }}"></script>
        <script type="text/javascript " src="{{ asset('frontend/assets/js/plugin/owl.carousel.min.js') }} "></script>
        <script type="text/javascript " src="{{ asset('frontend/assets/js/plugin/jquery.magnific-popup.min.js ') }}"></script>
          {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js " integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd " crossorigin="anonymous "></script> --}}
        <!--=== All Active ===-->
        <script type="text/javascript " src="{{ asset('frontend/assets/js/main.js') }} "></script>
        <!-- scroll js -->
            <!-- smooth scrool -->
          <script type="text/javascript " src="{{ asset('frontend/assets/js/plugin/smooth-scroll.js') }} "></script>
             <script >
            var scroll = new SmoothScroll('a[href*="# "]');
          </script>
          <script>
              $(function() {
                $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
                });
          </script>

          <script>
$(document).ready(function() {
  // executes when HTML-Document is loaded and DOM is ready
 
 // breakpoint and up  
 $(window).resize(function(){
   if ($(window).width() >= 980){	
 
       // when you hover a toggle show its dropdown menu
       $(".navbar .dropdown-toggle").hover(function () {
          $(this).parent().toggleClass("show");
          $(this).parent().find(".dropdown-menu").toggleClass("show"); 
        });
 
         // hide the menu when the mouse leaves the dropdown
       $( ".navbar .dropdown-menu" ).mouseleave(function() {
         $(this).removeClass("show");  
       });
   
     // do something here
   }	
 });  
   
   
 
 // document ready  
 });
          </script>
          @stack('script')