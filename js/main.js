$(document).ready(function() {
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

    var modalButton = $("[data-toggle=modal]");
    var modalCloseButton = $(".modal__close");
    modalButton.on("click", openModal);
    modalCloseButton.on("click", closeModal);

    $(document).on("keydown", function(e) {
        if (e.keyCode == 27)
            var modalOverlay = $(".modal__overlay");
        var modalDialog = $(".modal__dialog");
        modalOverlay.removeClass("modal__overlay--visible");
        modalDialog.removeClass("modal__dialog--visible");
        console.log('press esc');
    });

    function openModal() {
        var modalOverlay = $(".modal__overlay");
        var modalDialog = $(".modal__dialog");
        modalOverlay.addClass("modal__overlay--visible");
        modalDialog.addClass("modal__dialog--visible");
    }

    function closeModal(event) {
        event.preventDefault();
        var modalOverlay = $(".modal__overlay");
        var modalDialog = $(".modal__dialog");
        modalOverlay.removeClass("modal__overlay--visible");
        modalDialog.removeClass("modal__dialog--visible");
    }
});