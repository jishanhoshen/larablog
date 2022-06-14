require('./bootstrap');

global.jQuery = require('jquery');
var $ = global.jQuery;
window.$ = $;

let owl_carousel = require('owl.carousel');
window.fn = owl_carousel;

$(document).ready(function() {
    $('.trendingtopic.owl-carousel').owlCarousel({
        autoplay: !0,
        smartSpeed: 2e3,
        autoplayHoverPause:false,
        autoplayTimeout:7000,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1
    });

    $('.toppostslide.owl-carousel').owlCarousel({
        autoplay: !0,
        smartSpeed: 1500,
        autoplayHoverPause:false,
        autoplayTimeout:10000,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1
    });

    $('.featured.owl-carousel').owlCarousel({
        autoplay: !0,
        smartSpeed: 1500,
        autoplayHoverPause:false,
        autoplayTimeout:10000,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 4
    });
});
