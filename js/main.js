var hotelSlider = new Swiper('.hotel-slider', {
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
        nextEl: '.hotel-slider__button--next',
        prevEl: '.hotel-slider__button--prev',
    },

    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },

});

var reviewsSlider = new Swiper('.reviews-slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 300,

    autoplay: {
        delay: 4500,
    },

    effect: 'slide',

    // Navigation arrows
    navigation: {
        nextEl: '.reviews-slider__button--next',
        prevEl: '.reviews-slider__button--prev',
    },

    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },

});

var menuButton = document.querySelector('.menu-button');
menuButton.addEventListener('click', function() {
    document.querySelector('.navbar-bottom').classList.toggle('navbar-bottom__mobile--visible');
});