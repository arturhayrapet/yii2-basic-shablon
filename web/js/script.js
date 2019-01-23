$(document).ready(function () {
    //============ products slider  =====================
    $(function () {
        $('#products .all_sliders .owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            // stagePadding: 50,
            // autoplayTimeout: 5000,
            // autoplaySpeed: 1000,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 50,
                },
                800: {
                    items: 3,
                },
                1200: {
                    items: 5
                }
            }
        });
        let owl = $('#products  .owl-carousel');
        owl.owlCarousel();
        $('#products .customNextBtn').click(function () {
            owl.trigger('next.owl.carousel', [1000]);
        });
        $('#products .customPrevBtn').click(function () {
            owl.trigger('prev.owl.carousel', [1000]);
        });

    });
    //------ products typ_buttons slider =====================
    $('#prod_types .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        stagePadding: 20,
        responsive: {
            0: {
                items: 2,
                // stagePadding: 50,
            },
            800: {
                items: 1,
            },
        }
    });


    //=============== partners slider  ==========================================

    $(function () {
        $('#partners .owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            responsive: {
                0: {
                    items: 2,
                    margin:10,
                    stagePadding: 30,
                },
                800: {
                    items: 3,
                },
                1200: {
                    items: 4
                }
            }
        });
        let owl2 = $('#partners  .owl-carousel');
        owl2.owlCarousel();
        $('#partners .slider_next').click(function () {
            owl2.trigger('next.owl.carousel', [1000]);
        });
        $('#partners .slider_prev').click(function () {
            owl2.trigger('prev.owl.carousel', [1000]);
        });
    });


//    ==========================================================

//     top menu ===========
    $(".menu-items").click(function () {
        console.log();
        if ( $(this)[0].id !== 'social' ) {
            $(".menu-items a").removeClass("top_menu_active");
            $(this).find('a').addClass("top_menu_active");
        }
    });
//    ============ hamburger menu =======================
    let menu_hidden = true;

    $(".hamburger").click(function () {
        if (menu_hidden) {
            $(".hidden_menu").fadeIn();
            $("body").css('overflow','hidden')
            $("html").css('overflow','hidden')
        }
        else {
            $(".hidden_menu").fadeOut();
            $("body").css('overflow','unset')
            $("html").css('overflow','unset')
        }
        menu_hidden = !menu_hidden;
    });
    $(".close_menu").click(function () {
        $(".hidden_menu").fadeOut();
        $("body").css('overflow','unset')
        $("html").css('overflow','unset')
    });
    $(".t_menu-items").click(function (e) {
        $(".hidden_menu").fadeOut();
        $("body").css('overflow','unset');
        $(".t_menu-items a").removeClass("t_menu_active");
        $(this).find('a').addClass("t_menu_active");
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).find('a').attr('href')).position().top-70
        }, 500);
    });

//    ================= Products slider =================

    $("#products .prod_button").click(function () {
        $("#products .prod_button").removeClass("button_active");
        $(this).addClass("button_active");
        let currant = '.products_slider_' + this.id;
        $('.products_slider').css({'display': 'none', 'opacity': 0});
        $(currant).css({
            'display': 'block'
        });
        setTimeout(
            $(currant).animate({
                'opacity': 1
            },1000),1000);
    });

//    ================ Partners Slider ====================

    $("#partners .prod_button").click(function () {
        $("#partners .prod_button").removeClass("button_active");
        $(this).addClass("button_active");
        $('.partners_slider').css('display', 'none');
        $('.partners_' + this.id).css('display', 'block');
    });
//    ==================
    let language_hidden = true;
    $('.language').click(function () {
        let display = language_hidden ? 'block' : 'none';
        $('.choose_language').css('display', display);
        language_hidden = !language_hidden;
    });
    $('.menu-items').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).find('a').attr('href')).position().top-50
        }, 500);
    });
    $('.scroll_down').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#about").position().top-50
        }, 500);
    });

    $(".choose_language li").click(function () {
     if ($(this)[0].id === 'arm') $('.currant_lang img ').attr('src', "/images/flag/am-flag.png") ;
     if ($(this)[0].id === 'rus') $('.currant_lang img ').attr('src', "/images/flag/ru-flag.png") ;
     if ($(this)[0].id === 'en') $('.currant_lang img ').attr('src', "/images/flag/en-flag.png") ;
    });

});