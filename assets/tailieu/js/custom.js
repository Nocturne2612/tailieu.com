$(document).ready(function () {
    if (typeof $(".owl-carousel").html() != 'undefined') {
        $(".owl-carousel").owlCarousel({
            items: 1,
            itemsTablet: [768, 1],
            itemsDesktopSmall: [979, 1],
            itemsDesktop: [1199, 1],
            navigation: true,
            slideSpeed: 300,
            pagination: false,
            paginationSpeed: 400,
            navigationText: ["", ""]

        });
    }
    if (typeof $(".datepicker").html() != 'undefined') {
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,
        });
    }
    if (typeof $('.widget').offset() != 'undefined') {
        var objectX = $('.widget').offset().top;
        var footer = $('#footer').offset().top;

       
        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();
            //alert(scrollTop);

           // if (scrollTop > footer) {
//    $('.widget').removeClass('sticky');
           // }
           // else 
                if (scrollTop > objectX) {
                $('.widget').addClass('sticky');
            }
            else {
                $('.widget').removeClass('sticky');
            }
        };
        stickyNav();

        $(window).scroll(function () {
            stickyNav();
        });
    }

    jQuery(document).ready(function () {
        var offset = 350;
        var duration = 300;
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        jQuery('.back-to-top').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });

});