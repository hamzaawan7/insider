// OWL initialization JS
$('#sliderFeedsBanner').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    itemsDesktop: false,
    itemsMobile: true,
    responsiveClass: true,
    nav: true,
    navText: ["<p>Previous Matches</p><span class='arrow'>&#8592</span>", "<p>Next Matches</p><span class='arrow'>&#8594</span>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        800: {
            items: 2
        },
        1000: {
            items: 2,
            loop: false
        },
        1280: {
            items: 3,
            loop: false
        },
        1366: {
            items: 3,
            loop: false
        }
    }
});

$('#videoGrid').owlCarousel({
    loop: false,
    dots: false,
    margin: 15,
    itemsDesktop: false,
    itemsMobile: true,
    responsiveClass: true,
    mouseDrag: false,
    nav: false,
    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1,
            dots: true,
        },
        365: {
            items: 1,
            dots: true,
        },
        600: {
            items: 2,
            dots: true,
        },
        991: {
            items: 1,
            dots: true,
        },
        1199: {
            items: 1
        },
        1280: {
            items: 4,
            touchDrag: false,
        },
        1366: {
            items: 3
        }
    }
});

$('#videoThumbnail').owlCarousel({
    loop: false,
    nav: true,
    dots: true,
    margin: 10,
    itemsDesktop: false,
    itemsMobile: true,
    mouseDrag: false,
    responsiveClass: true,
    nav: false,
    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        991: {
            items: 2
        },
        1200: {
            items: 2,
            loop: false
        },
        1280: {
            items: 3,
            loop: false
        },
        1366: {
            items: 3,
            loop: false
        }
    }
});

$('#combinedNewsRow').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    margin: 20,
    itemsDesktop: false,
    itemsMobile: true,
    mouseDrag: false,
    responsiveClass: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
            dots: true,
        },
        600: {
            items: 2,
            dots: true,
        },
        800: {
            items: 2,
            dots: true,
        },
        1200: {
            items: 2,
            dots: true,
        },
        1280: {
            items: 3,
        },
        1366: {
            items: 4
        }
    }
});

$('#matchResults').owlCarousel({
    loop: false,
    nav: true,
    dots: true,
    margin: 15,
    itemsDesktop: false,
    itemsMobile: true,
    responsiveClass: true,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        991: {
            items: 3
        },
        1200: {
            items: 3,
            loop: false
        },
        1280: {
            items: 3,
            loop: false
        },
        1366: {
            items: 4,
            loop: false
        }
    }
});

$('#tourTeams').owlCarousel({
    loop: false,
    nav: true,
    dots: false,

    itemsDesktop: false,
    itemsMobile: true,
    responsiveClass: true,
    nav: true,
    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        800: {
            items: 4
        },
        1000: {
            items: 4,
            margin: 15,
        },
        1280: {
            items: 5,
            margin: 15,
        },
        1366: {
            items: 10,
            margin: 15,
        }
    }
});


$('#tourResultWeeks').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    margin: 5,
    itemsDesktop: false,
    itemsMobile: true,
    responsiveClass: true,
    nav: true,
    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        800: {
            items: 5
        },
        1000: {
            items: 5
        },
        1280: {
            items: 5
        },
        1366: {
            items: 10
        }
    }
});


$('#matchSchedule').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    margin: 5,
    itemsDesktop: false,
    itemsMobile: true,
    responsiveClass: true,
    nav: true,
    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 3
        },
        600: {
            items: 4
        },
        800: {
            items: 5
        },
        1023: {
            items: 4
        },
        1280: {
            items: 7
        },
        1366: {
            items: 7
        }
    }
});