jQuery(function ($) {

    'use strict';


    // jQuery('.mean-menu').meanmenu({
    //     meanScreenWidth: "1199"
    // });
    

    // Preloader
    $("body").addClass("pre-loaded");
    // Scrolltop
    $(window).on('scroll', function() {
        if( $(this).scrollTop() > 300 ) {
            $("#scrolltop").addClass("scrolltopactive");
        }
        else {
            $("#scrolltop").removeClass("scrolltopactive");
        }
    });
    $("#scrolltop").on('click', function () {
        $("html").animate({
            scrollTop: 0
        }, 2000);
        return false;
    });

    


    $('.aiservices').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows:false,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll:4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2.3,
              slidesToScroll: 2.3
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1.3,
              slidesToScroll: 1.3
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });


        // Testimonial-carousel
        $(".testimonial-carousel").owlCarousel({
            loop: true,
            items: 3,
            smartSpeed: 1500,
            margin: 30,
            dots: false,
            nav: true,
            navText: ['<i class="icofont-arrow-left"></i>','<i class="icofont-arrow-right"></i>'],
            responsive:{
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    
    
$('.nav-link').click(function () {
    $('.navbar-toggler').addClass('collapsed');
    $('.navbar-toggler').attr('aria-expanded','false');
    $('.navbar-collapse').removeClass('show');
});

 
    // Search-option
    $(".search-option").on("click", function(e) {
        e.preventDefault();
        $(".search-overlay").addClass("search-overlay-show").removeClass("search-overlay-none");
        $(".search-overlay .form-control").focus();
    })
    $(".search-close").on("click", function() {
        $(".search-overlay").removeClass("search-overlay-show").addClass("search-overlay-none");
        $(".search-overlay .form-control").blur();
    })

    // Side-topbar-option
    $(".side-topbar-option").on("click", "button", function() {
        $(".side-modal-wrapper").addClass("side-modal-wrapper-show");
        $(".side-modal").addClass("side-modal-show");
    })
    $(".side-modal-close").on("click", function() {
        $(".side-modal-wrapper").removeClass("side-modal-wrapper-show");
        $(".side-modal").removeClass("side-modal-show");
    })


});


    // Sticky navbar
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar-area').addClass('is-sticky');
            $(".fixed-top").addClass("non-fixed");
        } else {
            $('.navbar-area').removeClass('is-sticky');
            $(".fixed-top").removeClass("non-fixed");
        }
    });

    // portfolio filter
    $(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            
            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
                
            }
            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
                }
                $(this).addClass("active");
                
        });
        
        
    });

    