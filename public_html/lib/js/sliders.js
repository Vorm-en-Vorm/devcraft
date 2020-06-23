$(document).ready(function(){

    /* USPS slider */
    $('.heroslider').slick({
        autoplay: false,
        fade:true,
        dots: true,
        appendArrows: '.hero-nav',
        prevArrow:'<button type="button" class="arrow-btn arrow-prev"></button>',
        nextArrow:'<button type="button" class="arrow-btn arrow-next"></button>',
    });

});