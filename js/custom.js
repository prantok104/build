(function($) {
    "use strict";
    $(document).ready(function() {
        
        jQuery(window).on('load', function() {
            // // Preloader
            jQuery(".preloader").fadeOut(6000);

        });
        /*Bottom to Top*/
        $(window).scroll(function() {
            if ($(this).scrollTop() >=200) {        
                $('.topup, .message-btn').fadeIn(200);   
            } else {
                $('.topup, .message-btn').fadeOut(200);   
            }
        });
        $('.topup').click(function() {      
            $('body,html').animate({
                scrollTop : 0                      
            }, 1000);
        });
        /*Sticky Header*/
        $(window).scroll(function(){
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll < 200) sticky.removeClass('fixed');
            else sticky.addClass('fixed').animate({
                scrollTop: 0
            }, 3000);
        });
        /* 
        =================================================================
        01. Main Slide Active
        =================================================================	
        */
        $('.c-single-active').owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeInDown',
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause:true,
                nav: true,
                dots: false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            }) ; 

        
    $(".c-single-content").on("translate.owl.carousel", function() {
        $(".c-slider-content h1, .c-slider-content p").removeClass("animated bounceInDown slow").css("opacity", "0");
        $(".c-slider-content .button").removeClass("animated bounceInUp slow").css("opacity", "0");
    });
    $(".c-single-content").on("translated.owl.carousel", function() {
        $(".c-slider-content h1, .c-slider-content p").addClass("animated bounceInDown slow").css("opacity", "1");
        $(".c-slider-content .button").addClass("animated bounceInUp").css("opacity", "1");
    });/*End of ready function*/
    /* 
    =================================================================
        02. Team Slide Active
    =================================================================	
        */
            $('.c-team-area').owlCarousel({
                animateOut: 'zoomOut',
                animateIn: 'lightSpeedIn',
                autoplayHoverPause:true,
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 7000,
                mouseDrag: false,
                touchDrag: false,
                nav: true,
                dots: false,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
                responsive: {
                    0: {
                        items: 4
                    },
                    480: {
                        items: 4
                    },
                    600: {
                        items: 4
                    },
                    1000: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    }
                }
            });
            /* 
    =================================================================
        03. Client Slide Active
    =================================================================	
        */
            $('.c-client-active').owlCarousel({
                loop:true,
                autoplay:true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplayHoverPause:true,
                smartSpeed:1250,
                responsive:{
                    0:{
                        items:4
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:4
                    }
                }
            });
    /* 
    =================================================================
        04. Team Slide Active
    =================================================================	
        */        
         $('.counter').counterUp({
                delay: 10,
                time: 3000
        });
     /* 
    =================================================================
        05. Portfolio Active
    =================================================================	
        */       
        var $grid = $('.grid').isotope({
          itemSelector: '.element-item',
          layoutMode: 'fitRows',
          getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
            weight: function( itemElem ) {
              var weight = $( itemElem ).find('.weight').text();
              return parseFloat( weight.replace( /[\(\)]/g, '') );
            }
          }
        });
        var filterFns = {
          numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
          },
          ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
          }
        };
        $('#filters').on( 'click', 'button', function() {
          var filterValue = $( this ).attr('data-filter');
          filterValue = filterFns[ filterValue ] || filterValue;
          $grid.isotope({ filter: filterValue });
        });
        $('#sorts').on( 'click', 'button', function() {
          var sortByValue = $(this).attr('data-sort-by');
          $grid.isotope({ sortBy: sortByValue });
        });
        $('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
          });
        });
        /* 
    =================================================================
        06. Home1- Main slider Active
    =================================================================	
        */      
        $('.home1-slider-active').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause:true,
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        }) ; 
        $(".home1-slider-active").on("translate.owl.carousel", function() {
            $(".home1-slider-content h1, .home1-slider-content p").removeClass("animated fadeInDown slow").css("opacity", "0");
            $(".home1-slider-content .button").removeClass("animated fadeInUp slow").css("opacity", "0");
        });
        $(".home1-slider-active").on("translated.owl.carousel", function() {
            $(".home1-slider-content h1, .home1-slider-content p").addClass("animated fadeInDown slow").css("opacity", "1");
            $(".home1-slider-content .button").addClass("animated fadeInUp").css("opacity", "1");
        });
        /*
        =================================================================
         07. Portfolio Active
        =================================================================	
        */      
        $('.h1-worker-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause:true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
        /*
        =================================================================
         08. Client Slider Active
        =================================================================	
        */      
        $('.h1-single-client-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 7000,
            autoplayHoverPause:true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 5
                },
                1200: {
                    items: 5
                }
            }
        }) ;
        /*
        =================================================================
         09. H1-Pricing Active JS
        =================================================================	
        */ 
        $('.h1-single-pricing').hover(function(){
            $(this).addClass('active');
        },
        function(){
            $(this).removeClass('active');
        });
        /*
        =================================================================
         10. H1-Contact Parallax JS
        =================================================================	
        */ 
        $('.c-counter-area').parallax({
            imageSrc: 'img/counter-bg2.jpg',
            speed: 0.5
        });
        $('.comming-soon1').parallax({
            imageSrc: 'img/comming-1.jpg',
            speed: 0.5
        });
        $('.comming-soon2').parallax({
            imageSrc: 'img/comming-bg2.jpg',
            speed: 0.5
        });
        $('.coming3-area').parallax({
            imageSrc: 'img/slider3.jpg',
            speed: 0.5
        });
        /*
        =================================================================
         11. Product-add JS
        =================================================================	
        */ 
        $(".decreaseVal").click(function() {
            var input_el=$(this).next('input');
            var v= input_el.val()-1;
            if(v>=input_el.attr('min'))
                input_el.val(v)
        });


        $(".increaseVal").click(function() {
            var input_el=$(this).prev('input');
            var v= input_el.val()*1+1;
            if(v<=input_el.attr('max'))
                input_el.val(v)
        });
        /*
        =================================================================
         12. Coming1 and Coming2 Typed JS
        =================================================================	
        */ 
        var typed = new Typed('.comming-element', {
            strings: ["coming soon... !", "under build... !"],
            typeSpeed: 100,
            loop:true
        });
    });
}(jQuery));
/*
    =================================================================
     11.Comming3-page Count Down JS
    =================================================================	
*/ 
const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('may 14, 2018 00:00:00').getTime(),
    x = setInterval(function() {
        let now = new Date().getTime(),
            distance = countDown - now;
        document.getElementById('days').innerText = Math.floor(distance / (day)),
            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
    }, second)
