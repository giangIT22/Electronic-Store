$(document).ready(function() {
    $("#testimonial-slider-1").owlCarousel({
        items: 4,
        itemsDesktop: [1000, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
        itemsMobile: [480, 2],
        pagination: false,
        autoPlay: true,
    });
    $("#testimonial-slider-2").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsMobile: [480, 1],
        pagination: true,
        autoPlay: false,
    });
});