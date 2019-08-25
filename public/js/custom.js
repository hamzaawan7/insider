$(window).scroll(function() {
    // AFFIX HEADER 
    if ($(window).scrollTop() > 100) {
        if (!$('header').hasClass('affix')) {
            $('body').addClass('scrollStart');
            $('header').addClass('affix');
        }
    } else {
        if ($('header').hasClass('affix')) {
            $('body').removeClass('scrollStart');
            $('header').removeClass('affix');
        }
    }
});

$(document).ready(function() {
    // HEADER SEARCH
    $('.search-label').on("click", (function(e) {
        $(".form-group").css('min-width', '300px');
        $(".search-form input").removeClass('d-none').focus();
        $(".search-label").removeClass('active');
        e.stopPropagation()
    }));
    $(document).on("click", function(e) {
        if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
            $(".form-group").css('min-width', '60px');
            $(".search-label").addClass('active');
            $(".search-form input").addClass('d-none');
        }
    });
    $(".form-control-submit").click(function(e) {
        $(".form-control").each(function() {
            if ($(".form-control").val().length == 0) {
                e.preventDefault();

            }
        })

    });
    // MOBILE TOGGLE ICON MENU
    $('.navbar-toggler, .burger-icon').click(function() {
        $(this).toggleClass('open');
    });
    $('.burger-icon').click(function() {
        if ($(this).hasClass("open")) {
            $(".full-screen-nav").addClass("open");
        } else {
            $(".full-screen-nav").removeClass("open");
        }
    });

});

// FAVOURITE ACTIVE ICON
$(function() {
    $('.read-news i').on('click', function() {
        var self = this;
        var parent = $(self).parent();
        if (!$(parent).find('i').toggleClass('fa far')) {
            $(self).toggleClass('fa far');
            $(this).closest().toggleClass('favnews');

        }

    });
});

// CURRENT CRICKET CAROUSEL
(function($) {
    //Function to animate slider captions
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = "webkitAnimationEnd animationend";

        elems.each(function() {
            var $this = $(this),
                $animationType = $this.data("animation");
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);

            });
        });
    }

    //Variables on page load
    var $myCarousel = $("#welcomeSliderIndicators"),
        $firstAnimatingElems = $myCarousel
        .find(".carousel-item:first")
        .find("[data-animation ^= 'animated']");

    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);

    //Other slides to be animated on carousel slide event
    $myCarousel.on("slide.bs.carousel", function(e) {
        var $animatingElems = $(e.relatedTarget).find(
            "[data-animation ^= 'animated']"
        );
        doAnimations($animatingElems);
    });
})(jQuery);

// VIDEO POPUP Initilization
$(function() {
    $(".btn-play").videoPopup({
        autoplay: 0,
        controlsColor: 'white',
        showVideoInformations: 0,
        width: 1000,
        customOptions: {
            rel: 0,
            end: 60
        }
    });
});