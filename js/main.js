var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 300,

    autoplay: {
        delay: 4500,
    },

    effect: 'fade',

    fadeEffect: {
        crossFade: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.slider-button--next',
        prevEl: '.slider-button--prev',
    },

    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },

})