(function($) {
    "use strict";
    $(document).on("ready", function() {
        /*==============================================================================
		  Header Sticky JS
	  ===============================================================================*/
        var activeSticky = $("#active-sticky"),
            winDow = $(window);
        winDow.on("scroll", function() {
            var scroll = $(window).scrollTop(),
                isSticky = activeSticky;
            if (scroll < 150) {
                isSticky.removeClass("is-sticky");
            } else {
                isSticky.addClass("is-sticky");
            }
        });

        /*==============================================================================
		 	Mobile Menu JS
	  ===============================================================================*/
        var $offcanvasNav = $("#offcanvas-menu a");
        $offcanvasNav.on("click", function() {
            var link = $(this);
            var closestUl = link.closest("ul");
            var activeLinks = closestUl.find(".active");
            var closestLi = link.closest("li");
            var linkStatus = closestLi.hasClass("active");
            var count = 0;

            closestUl.find("ul").slideUp(function() {
                if (++count == closestUl.find("ul").length)
                    activeLinks.removeClass("active");
            });
            if (!linkStatus) {
                closestLi.children("ul").slideDown();
                closestLi.addClass("active");
            }
        });

        /*==============================================================================
			CounterUp JS
		================================================================================*/
        $(".counter").counterUp({
            time: 1500,
        });

        /*=============================================================================
			Nice Select JS
  	===============================================================================*/
        $("select").niceSelect();

        /*==============================================================================
		  Wow JS
	  ================================================================================*/
        var window_width = $(window).width();
        if (window_width > 767) {
            new WOW().init();
        }

        /*=============================================================================
          Video Popup JS
        ===============================================================================*/
        $(".popup-video").magnificPopup({
            type: "iframe",
        });

        /*==============================================================================
		  Topbar Update Notice Slider
	  ================================================================================*/
        $(".topbar-update-notice-slider").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            touchDrag: true,
            mouseDrag: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            animateOut: "slideOutDown",
            animateIn: "flipInX",
            smartSpeed: 500,
            merge: true,
            nav: false,
            dots: false,
            margin: 0,
        });

        /*==============================================================================
		  Hero Slider
	  ================================================================================*/
        $(".hero-slider").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            smartSpeed: 500,
            merge: true,
            nav: true,
            dots: true,
            margin: 24,
            navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>",
            ],
        });

        /*==============================================================================
		  Students Slider
	  ================================================================================*/
        $(".students-slider").owlCarousel({
            items: 4,
            autoplay: true,
            loop: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            smartSpeed: 500,
            merge: true,
            nav: true,
            dots: false,
            margin: 12,
            navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>",
            ],
            responsive: {
                300: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1320: {
                    items: 4,
                },
            },
        });

        /*==============================================================================
		  Gallery Slider
	  ================================================================================*/
        $(".gallery-slider").owlCarousel({
            items: 3,
            autoplay: true,
            loop: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            smartSpeed: 500,
            merge: true,
            nav: true,
            dots: false,
            margin: 24,
            navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>",
            ],
            responsive: {
                300: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1320: {
                    items: 3,
                },
            },
        });

        /*==============================================================================
		  Corner Message Slider
	  ================================================================================*/
        $(".corner-message-slider").owlCarousel({
            items: 2,
            autoplay: true,
            loop: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            smartSpeed: 500,
            merge: true,
            nav: true,
            dots: false,
            margin: 24,
            navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>",
            ],
            responsive: {
                300: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                1320: {
                    items: 2,
                },
            },
        });

        /*==============================================================================
		  Related Teachers Slider
	  ================================================================================*/
        $(".related-teachers-slider").owlCarousel({
            items: 3,
            autoplay: false,
            loop: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            smartSpeed: 500,
            merge: true,
            nav: true,
            dots: false,
            margin: 24,
            navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>",
            ],
            responsive: {
                300: {
                    items: 1,
                },
                480: {
                    items: 1,
                },
                480: {
                    items: 2,
                },
                1320: {
                    items: 3,
                },
            },
        });
    });

    /*==============================================================================
		Preloader JS
	================================================================================*/
    $(window).on("load", function(event) {
        $("#preloader").delay(800).fadeOut(500);
    });
})(jQuery);
