// -----------------------------

//   js index
/* =================== */
/*  
    


*/
// -----------------------------

(function($) {
    "use strict";


    /*---------------------
    preloader
    --------------------- */

    $(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() { $(this).remove(); });
    });

    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    $('nav#dropdown').meanmenu();

    /*-----------------
    meanmenu 
    -----------------*/
    $('nav#mobile_menu_active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: '.mobile-menu-area .container',
    });

    /*------------------------------
        datepicker
    ------------------------------ */
    $("#datepicker").datepicker();

    /*------------------------------
        datepicker2
    ------------------------------ */
    $("#datepicker2").datepicker();

    /*------------------------------
        datepicker3
    ------------------------------ */
    $("#datepicker3").datepicker();

    /*------------------------------
        datepicker4
    ------------------------------ */
    $("#datepicker4").datepicker();

    /*------------------------------
        datepicker5
    ------------------------------ */
    $("#datepicker5").datepicker();

    /*------------------------------
        datepicker6
    ------------------------------ */
    $("#datepicker6").datepicker();

    /*------------------------------
        datepicker7
    ------------------------------ */
    $("#datepicker7").datepicker();

    /*------------------------------
        datepicker8
    ------------------------------ */
    $("#datepicker8").datepicker();

    /*------------------------------
        datepicker9
    ------------------------------ */
    $("#datepicker9").datepicker();

    /*------------------------------
         counter
    ------------------------------ */
    $('.counter-up').counterUp();

    /*---------------------
    countdown
    --------------------- */
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });

    /*-----------------------
    cart-plus-minus-button 
    -------------------------*/
    $(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });

    /*---------------------
    fancybox
    --------------------- */
    $('[data-fancybox]').fancybox({
        image: {
            protect: true
        }
    });

    /*---------------------
    about-video-popup
    --------------------- */
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
    });

    /*---------------------
    prr-carousel
    --------------------- */
    function prr_carousel() {
        var owl = $(".prr-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 1,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    prr_carousel();

    /*---------------------
    introduce-carousel
    --------------------- */
    function introduce_carousel() {
        var owl = $(".introduce-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            nav: true,
            items: 1,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    introduce_carousel();

    /*---------------------
    event-carousel
    --------------------- */
    function event_carousel() {
        var owl = $(".event-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            nav: true,
            items: 1,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    event_carousel();

    /*---------------------
    testimonial-carousel
    --------------------- */
    function testimonial_carousel() {
        var owl = $(".testimonial-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 1,
            smartSpeed: 2000,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    testimonial_carousel();

    /*---------------------
    hero-2-carousel
    --------------------- */
    function hero2_carousel() {
        var owl = $(".hero-2-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 1,
            smartSpeed: 2000,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    hero2_carousel();

    /*---------------------
    room-suits-carousel
    --------------------- */
    function room_suits_carousel() {
        var owl = $(".room-suits-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 3,
            smartSpeed: 2000,
            dots: false,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 2
                }
            }
        });
    }
    room_suits_carousel();

    /*---------------------
    offers-carousel
    --------------------- */
    function offers_carousel() {
        var owl = $(".offers-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 1,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    offers_carousel();

    /*---------------------
    h3-hero-carousel
    --------------------- */
    function h3_hero_carousel() {
        var owl = $(".h3-hero-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 1,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    h3_hero_carousel();

    /*---------------------
    h4-hero-carousel
    --------------------- */
    function h4_hero_carousel() {
        var owl = $(".h4-hero-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 1,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    h4_hero_carousel();

    /*---------------------
    gd-tab-carousel
    --------------------- */
    function gd_tab_carousel() {
        var owl = $(".gd-tab-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            nav: true,
            items: 2,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                760: {
                    items: 2
                }
            }
        });
    }
    gd_tab_carousel();


    /*---------------------
    // Ajax Contact Form
    --------------------- */

    $('.cf-msg').hide();
    $('form#cf button#submit').on('click', function() {
        var fname = $('#fname').val();
        var subject = $('#subject').val();
        var email = $('#email').val();
        var msg = $('#msg').val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!regex.test(email)) {
            alert('Please enter valid email');
            return false;
        }

        fname = $.trim(fname);
        subject = $.trim(subject);
        email = $.trim(email);
        msg = $.trim(msg);

        if (fname != '' && email != '' && msg != '') {
            var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: values,
                success: function() {
                    $('#fname').val('');
                    $('#subject').val('');
                    $('#email').val('');
                    $('#msg').val('');

                    $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
                    setTimeout(function() {
                        $('.cf-msg').fadeOut('slow');
                    }, 4000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
        }
        return false;
    });



}(jQuery));