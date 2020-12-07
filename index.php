<?php include('header.php') ?>

    <nav class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-list__item">
                    <a href="#" class="breadcrumb-list__link">Home</a>
                </li>
                <li class="breadcrumb-list__item">
                    <a href="#" class="breadcrumb-list__link">Flash Offers</a>
                </li>
                <li class="breadcrumb-list__item">
                    Grand Hilton Hotel
                </li>
            </ul>
        </div>
    </nav>

    <section class="hotel">
        <div class="container">
            <div class="hotel-info">
                <div class="hotel-info__text">
                    <div class="hotel-wrapper">
                        <div class="stars">
                            <img src="img/star.svg" alt="star">
                            <img src="img/star.svg" alt="star">
                            <img src="img/star.svg" alt="star">
                            <img src="img/star.svg" alt="star">
                            <img src="img/star.svg" alt="star">
                        </div>
                        <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
                        <span class="offer hotel-info__offer">Flash Offer</span>
                    </div>
                    <p class="hotel-description hotel-info__description">Half-Board/ All Inclusive + Complimentary Activities + Child&nbsp;Stays&nbsp;Free</p>
                </div>

                <div class="rating hotel-info__rating">
                    <span class="rating__text">User Rattings</span>
                    <span class="rating__amount">4.5/
                        <span class="rating__amount_small">5</span>
                    </span>
                </div>
            </div>

            <div class="hotel-grid">

                <!-- Slider main container -->
                <div class="swiper-container hotel-slider hotel__slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide hotel-slider__item">
                            <img class="hotel-slider__image" src="img/slide-1.jpg" alt="slide">
                        </div>
                        <div class="swiper-slide hotel-slider__item">
                            <img class="hotel-slider__image" src="img/slide-2.jpg" alt="slide">
                        </div>
                        <div class="swiper-slide hotel-slider__item">
                            <img class="hotel-slider__image" src="img/slide-3.jpg" alt="slide">
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <a href="#" class="hotel-slider__button hotel-slider__button--prev"></a>
                    <a href="#" class="hotel-slider__button hotel-slider__button--next"></a>
                </div>


                <div class="hotel-right">
                    <div class="booking">
                        <div class="booking__info">
                            <div class="booking__price">
                                <span class="booking__start">price starts as</span>
                                <strong class="booking__amount">$ 8,500</strong>
                                <span class="booking__per-room">per room / night</span>
                            </div>

                            <div class="booking__room">
                                <div class="booking__text">
                                    <img src="img/icon-user.svg" alt="user" class="booking__icon">
                                    <span class="booking__description">2 x Guests</span>
                                </div>
                                <div class="booking__text">
                                    <img src="img/icon-home.svg" alt="home" class="booking__icon">
                                    <span class="booking__description">1 x Room</span>
                                </div>
                            </div>
                        </div>

                        <div class="booking__call-center">
                            <span class="booking__action">Quick Booking</span>
                            <a href="tel:12100" class="booking__phone">
                                <img src="img/icon-phone.svg" alt="phone" class="booking__phone-icon">
                                <span class="booking__number">12100</span>
                            </a>
                        </div>

                        <button class="button booking__button">View Other Options</button>
                    </div>

                    <div class="map">
                        <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac9929bd4dbabf82bb0ab441bb986fd7445992fda0fbd5c225bcc52577d4ebd29&amp;width=100%&amp;height=100%&amp;lang=en_US&amp;scroll=true"></script> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5414950814966!2d98.29703101434418!3d7.838252394352206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1606555477851!5m2!1sru!2sru"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <section class="packages">
        <div class="container">
            <h2 class="packages__title">Other Packages</h2>

            <div class="packages-wrapper">
                <div class="packages-card packages-card__main">
                    <img src="img/packages-img/package-1.jpeg" alt="Hotel Blue Haven" class="packages-card__main-image">

                    <div class="packages-card__info packages-card__main-info">
                        <div class="packages-card__header">
                            <div class="stars">
                                <img src="img/star.svg" alt="star">
                                <img src="img/star.svg" alt="star">
                                <img src="img/star.svg" alt="star">
                                <img src="img/star.svg" alt="star">
                                <img src="img/star.svg" alt="star">
                            </div>

                            <h3 class="packages-card__title packages-card__main-title">Hotel Blue Haven</h3>
                        </div>

                        <div class="packages-card__content">
                            <p class="packages-card__description">
                                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit.
                                Ipsum est fugiat velit ea ullamco do
                            </p>

                            <div class="packages-card__options packages-card__main-options">
                                <div class="packages-card__option">
                                    <img src="img/icon-map-pin.svg" alt="icon: map-pin" class="packages-card__option-icon">
                                    <span class="packages-card__option-text">1749 Wheeler Ridge  Delaware</span>
                                </div>

                                <div class="packages-card__option">
                                    <img src="img/icon-user.svg" alt="icon: guest" class="packages-card__option-icon">
                                    <span class="packages-card__option-text">2 x Guests</span>
                                </div>

                                <div class="packages-card__option">
                                    <img src="img/icon-home.svg" alt="icon: home" class="packages-card__option-icon">
                                    <span class="packages-card__option-text">1 x Room</span>
                                </div>
                            </div>

                            <div class="packages-card__price">
                                <span class="packages-card__price_old">$ 10,500</span>
                                <span class="packages-card__price_new">$ 8,500</span>
                                <button class="packages-card__button">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="packages-card">
                    <img src="img/packages-img/package-2.jpeg" alt="LUX* Belle Mare" class="packages-card__image">

                    <div class="packages-card__info">
                        <h3 class="packages-card__title">LUX* Belle Mare</h3>

                        <div class="packages-card__options">
                            <div class="packages-card__option">
                                <img src="img/icon-map-pin.svg" alt="icon: map-pin" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1749 Wheeler Ridge  Delaware</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-user.svg" alt="icon: guest" class="packages-card__option-icon">
                                <span class="packages-card__option-text">2 x Guests</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-home.svg" alt="icon: home" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1 x Room</span>
                            </div>
                        </div>

                        <div class="packages-card__price">
                            <span class="packages-card__price_old">$ 8,500</span>
                            <span class="packages-card__price_new">$ 3,000</span>
                            <button class="packages-card__button">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="packages-card">
                    <img src="img/packages-img/package-3.jpeg" alt="White Palace" class="packages-card__image">

                    <div class="packages-card__info">
                        <h3 class="packages-card__title">White Palace</h3>

                        <div class="packages-card__options">
                            <div class="packages-card__option">
                                <img src="img/icon-map-pin.svg" alt="icon: map-pin" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1749 Wheeler Ridge  Delaware</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-user.svg" alt="icon: guest" class="packages-card__option-icon">
                                <span class="packages-card__option-text">2 x Guests</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-home.svg" alt="icon: home" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1 x Room</span>
                            </div>
                        </div>

                        <div class="packages-card__price">
                            <span class="packages-card__price_old">$ 10,500</span>
                            <span class="packages-card__price_new">$ 9,500</span>
                            <button class="packages-card__button">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="packages-card">
                    <img src="img/packages-img/package-4.jpeg" alt="Luxury Place" class="packages-card__image">

                    <div class="packages-card__info">
                        <h3 class="packages-card__title">Luxury Place</h3>

                        <div class="packages-card__options">
                            <div class="packages-card__option">
                                <img src="img/icon-map-pin.svg" alt="icon: map-pin" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1749 Wheeler Ridge  Delaware</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-user.svg" alt="icon: guest" class="packages-card__option-icon">
                                <span class="packages-card__option-text">2 x Guests</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-home.svg" alt="icon: home" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1 x Room</span>
                            </div>
                        </div>

                        <div class="packages-card__price">
                            <span class="packages-card__price_old">$ 4,500</span>
                            <span class="packages-card__price_new">$ 2,500</span>
                            <button class="packages-card__button">Book Now</button>
                        </div>
                    </div>
                </div>

                <div class="packages-card">
                    <img src="img/packages-img/package-5.jpeg" alt="Hotel Five Star" class="packages-card__image">

                    <div class="packages-card__info">
                        <h3 class="packages-card__title">Hotel Five Star</h3>

                        <div class="packages-card__options">
                            <div class="packages-card__option">
                                <img src="img/icon-map-pin.svg" alt="icon: map-pin" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1749 Wheeler Ridge  Delaware</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-user.svg" alt="icon: guest" class="packages-card__option-icon">
                                <span class="packages-card__option-text">2 x Guests</span>
                            </div>

                            <div class="packages-card__option">
                                <img src="img/icon-home.svg" alt="icon: home" class="packages-card__option-icon">
                                <span class="packages-card__option-text">1 x Room</span>
                            </div>
                        </div>

                        <div class="packages-card__price">
                            <span class="packages-card__price_old">$ 6,500</span>
                            <span class="packages-card__price_new">$ 3,500</span>
                            <button class="packages-card__button">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="newsletter parallax-window" data-parallax="scroll" data-speed="0.2" data-image-src="img/newsletter-bg.jpeg">
        <div class="newsletter-wrapper">
            <h2 class="newsletter-title">
                subscribe to our
                <span class="newsletter-title__strong">Newsletter</span>
            </h2>

            <form action="send.php" method="post" class="subscribe newsletter__subscribe">
                <input type="text" class="subscribe__input" placeholder="Your email address" name="subscription">
                <button class="subscribe__button">Send</button>
            </form>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2 class="reviews__title">
                What people think about&nbsp;us
            </h2>

            <div class="swiper-container reviews-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="reviews-slider__item">
                            <div class="reviews-slider__profile">
                                <img src="img/reviews-avatar-1.jpeg" alt="avatar: Megan Fox" class="reviews-slider__avatar">
                                <h3 class="reviews-slider__username">Megan Fox</h3>
                                <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                                <div class="reviews-slider__rating">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                </div>
                            </div>
                            <p class="reviews-slider__text">
                                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of gallery which were giving bad
                                feeling. Breakfast was good and support of the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but self location in a narrow street is not good. Overall it
                                was a good experience and could recommend.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="reviews-slider__item">
                            <div class="reviews-slider__profile">
                                <img src="img/reviews-avatar-2.jpeg" alt="avatar: Sharon" class="reviews-slider__avatar">
                                <h3 class="reviews-slider__username">Sharon</h3>
                                <span class="reviews-slider__date">Stayed 4 Nov, 2020</span>
                                <div class="reviews-slider__rating">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                    <img src="img/star.svg" alt="star" class="reviews-slider__rating-star">
                                </div>
                            </div>
                            <p class="reviews-slider__text">
                                Loved the entire hotel from beginning to end! Exceptional place! This hotel is absolutely beautiful! The size of the room was great it accommodated the 4 of us perfectly! Full size kitchen was very helpful! We made breakfast and dinner everyday of our
                                stay! It saved us so much money! There was a spa tub in the main room, we also had a full sized bathroom with a shower!
                            </p>
                        </div>
                    </div>
                </div>
                <a href="#" class="reviews-slider__button reviews-slider__button--prev"></a>
                <a href="#" class="reviews-slider__button reviews-slider__button--next"></a>
            </div>
        </div>
    </section>

    <section class="activities">
        <div class="container">
            <h2 class="activities__title">Other Activities</h2>

            <div class="activities-wrapper">
                <div class="card activities__card">
                    <img src="img/activity-img/activity-img-1.jpeg" alt="The curious corner of chamarel" class="card__image">
                    <h3 class="card__title">The curious corner of chamarel</h3>
                    <button class="card__button">Book Now</button>
                </div>
                <div class="card activities__card">
                    <img src="img/activity-img/activity-img-2.jpeg" alt="Gymkhana club golf course" class="card__image">
                    <h3 class="card__title">Gymkhana club golf course</h3>
                    <button class="card__button">Book Now</button>
                </div>
                <div class="card activities__card">
                    <img src="img/activity-img/activity-img-3.jpeg" alt="Tamarind falls hiking trip - full day" class="card__image">
                    <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
                    <button class="card__button">Book Now</button>
                </div>
                <div class="card activities__card">
                    <img src="img/activity-img/activity-img-4.jpeg" alt="The blue marine discovery quest" class="card__image">
                    <h3 class="card__title">The blue marine discovery quest</h3>
                    <button class="card__button">Book Now</button>
                </div>
            </div>
        </div>
    </section>

<?php include('footer.php') ?>