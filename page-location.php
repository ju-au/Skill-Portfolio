<?php get_header() ?>

<section class="top">
    <?php the_post_thumbnail('full', array('class' => 'top__img')); ?>
    <h1 class="page__title">Location</h1>
</section>


<section class="map-area">
    <div class="container map-area__container">
        <h2 class="section__title">Ramen Nobu</h2>
        <iframe class="map-area__gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3816.647125794986!2d145.738206!3d-16.94269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x69786527d5650d3b%3A0x581bc495bc2e97cb!2sRamen%20Nobu!5e0!3m2!1sen!2sau!4v1613103469711!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>


<section class="information">
    <div class="container information__container">
        <!-- swiper.js -->
        <div class="swiper-container information__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="information__img" src="<?php echo get_template_directory_uri() . "/assets/images/location/exterior11.jpg"; ?>" alt="First View Carousel"></div>
                <div class="swiper-slide"><img class="information__img" src="<?php echo get_template_directory_uri() . "/assets/images/location/lantern-lane11.jpg"; ?>" alt="First View Carousel"></div>
                <div class="swiper-slide"><img class="information__img" src="<?php echo get_template_directory_uri() . "/assets/images/location/gate11.jpg"; ?>" alt="First View Carousel"></div>
            </div>
        </div>

        <div class="information__contents">
            <div class="information-item">
                <h3 class="information__title">Address</h3>
                <div class="information__illust-position">
                    <p class="information__body">
                        F13A / 537 Mulgrave Rd, Earlville Qld 4870<br><br>

                        Food Court Side Lantern Lane<br>
                        Stockland Shopping Centre
                    </p>
                    <img class="information__illust" src="<?php echo get_template_directory_uri(); ?>/assets/images/location/point2-1.png" alt="illustrated pointing girl">
                </div>
            </div> <!-- .information-item -->
            <div class="information-item">
                <h3 class="information__title">Trading Hours</h3>
                <p class="information__body">
                    Open daily except otherwise noticed.<br>
                    Please check our SNS.
                </p>
                <table class="information__hours">
                    <tr class="hours__row">
                        <td class="hours__day">Sun</td>
                        <td class="hours__time">10:30am - 5:00pm</td>
                    </tr>
                    <tr class="hours__row">
                        <td class="hours__day">Mon</td>
                        <td class="hours__time">10:30am - 3:30pm</td>
                    </tr>
                    <tr class="hours__row">
                        <td class="hours__day">Tue - Sat</td>
                        <td class="hours__time">10:30am - 7:30pm</td>
                    </tr>
                </table>
            </div> <!-- .information-item -->
            <div class="information-item">
                <h3 class="information__title">Contact</h3>
                <p class="information__body">
                    <b>Phone : 0742 212 058</b>
                </p>
                <a href="https://www.facebook.com/ramen.nobu.cairns.page" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square information__sns-icon"></i></a>
                <a href="https://www.instagram.com/ramen_nobu/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram-square information__sns-icon"></i></a>
                <a href="https://www.ubereats.com/au/cairns/food-delivery/ramen-nobu/-tuzh0pIQpq0uSbnGdDsvA" target="_blank" rel="noopener noreferrer"><img class="information__uber-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/uber-eats.svg" alt="uber eats logo"></a>
                <a href="<?php echo home_url(); ?>/contact" class="button information__button">Contact Form<span class="button-arrow">&gt;</span></a>
            </div> <!-- .information-item -->
        </div> <!-- .information-contents -->
    </div> <!-- .information-container -->
</section> <!-- .information -->

<?php get_footer(); ?>