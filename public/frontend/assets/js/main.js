$(document).ready(function($){
	"use strict";

	// WOW Js Active
	new WOW().init();

	// ---- Active
  // our team owl crsl
    $('.owl-crsl').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3,
            loop:true,
        },
        1000:{
            loop:true,
            items:4
        }
    }
})

    // message slider wol crsl
    $('.message_slider_owl').owlCarousel({
        margin:10,
        navText:['<sapn><i class="fa fa-arrow-left"></i><span>','<sapn><i class="fa fa-arrow-right"></i><span>'],
        nav:false,
        nav:false,
        dots:true,


        
        responsive:{
            0:{
                items:1,
                loop:true,
            },
            600:{
                loop:true,
                items:1
            },
            1000:{
                loop:true,
                items:2
            }
        }
    })
    // brand wol crsl
    $('.brand-owl').owlCarousel({
    navText:['<sapn><i class="fa fa-arrow-left"></i><span>','<sapn><i class="fa fa-arrow-right"></i><span>'],
    margin:10,
    nav:false,
    dots:true,
    loop:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})



    // client slider
    $('.client_slider_item').owlCarousel({
        
        margin:10,
        navText:['<sapn><i class="fa fa-arrow-left"></i><span>','<sapn><i class="fa fa-arrow-right"></i><span>'],
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    // Owl Next Privew Change
    //$( ".owl-prev").html('<i class="fa screenshort-arow fa-chevron-left"></i>');
    //$( ".owl-next").html('<i class="fa screenshort-arow fa-chevron-right"></i>');
    // popup.......
    // video section popup
   $('.video-link').magnificPopup({
   	type:'iframe',
   	iframe: {
  patterns: {
    youtube: {
      index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

      id: 'v=', 

      src: 'http://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
    }

  },

  srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
}
   });
   // video section popup end.......

   // skill bar sectin
    jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
      width:jQuery(this).attr('data-percent')
    },6000);
  });
    // counter js
    $('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
    // skill bar end

    // mixit up section
  var mixer = mixitup('.portfolio-content');
  // imgage popup
 $('.image-link').magnificPopup({type:'image'});

  
}(jQuery));