var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 500,

    autoplay: {
        delay: 4000,
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