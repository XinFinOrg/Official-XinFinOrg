(function ($) {
    "use strict";
    $(document).on("ready", function () {
        // SCROLL TO TOP
        var progressPath = document.querySelector(".progress-wrap path");
        var pathLength = progressPath.getTotalLength();

        progressPath.style.transition = progressPath.style.WebkitTransition = "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";

        var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength) / height;
            progressPath.style.strokeDashoffset = progress;
        };

        updateProgress();
        $(window).scroll(updateProgress);

        var offset = 50;
        var duration = 550;

        jQuery(window).on("scroll", function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery(".progress-wrap").addClass("active-progress");
            } else {
                jQuery(".progress-wrap").removeClass("active-progress");
            }
        });

        jQuery(".progress-wrap").on("click", function (event) {
            event.preventDefault();
            jQuery("html, body").animate({ scrollTop: 0 }, duration);
            return false;
        });

        // MOBILE MENU
        $("#hamburger").on("click", function () {
            $(".mobile-nav").addClass("show");
            $(".overlay").addClass("active");
        });

        $(".close-nav").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $(".overlay").removeClass("active");
        });

        $(".overlay").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $(".overlay").removeClass("active");
        });

        $("#mobile-menu").metisMenu();


        /* Sticky Header */
        var windows = $(window);
        $(window).on('scroll', function () {
            var scrollPos = $(this).scrollTop();
            if (scrollPos > 50) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }
        });
        // PROGRESS BAR
        jQuery(".skillbar").each(function () {
            jQuery(this)
                .find(".skillbar-bar")
                .animate(
                    {
                        width: jQuery(this).attr("data-percent"),
                    },
                    6000
                );
        });

        // COUNTER UP
        $('.counter').countUp();
        
    }); // end document ready function
})(jQuery); // End jQuery
