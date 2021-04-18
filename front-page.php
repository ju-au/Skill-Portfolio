<?php get_header() ?>



<section class="first-view">
    <!-- swiper.js -->
    <div class="swiper-container first-view__carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() . "/assets/images/home/tantan169near.jpg"; ?>" alt="First View Carousel" class="first-view__carousel"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() . "/assets/images/home/exterior169-1.jpg"; ?>" alt="First View Carousel" class="first-view__carousel"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() . "/assets/images/home/header1.5.png"; ?>" alt="First View Carousel" class="first-view__carousel"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <h1 class="page__title">Welcome to <br class="pc-br">Ramen Nobu</h1>
    <img class="first-view__scroll" id="first-view__scroll" src="<?php echo get_template_directory_uri() . "/assets/images/common/scroll.png"; ?>" alt="illust scroll down">
</section>


<section class="top-location">
    <div class="container top-location__container">
        <h2 class="section__title">One of the BEST RAMENs in cairns!!</h2>
        <p class="top-location__body">Visit us at Lantern Lane<br>Stockland Shopping Center</p>
        <a href="./location" class="button">Location</a>
    </div>
</section>



<section class="top-news">
    <div class="container top-news__container">
        <h2 class="section__title">News</h2>
        <div class="top-news__headlines">
            <?php
            $args = array(
                'post-type' => 'post',
                'posts_per_page' => 4
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) :
                while ($posts->have_posts()) : $posts->the_post();
            ?>
                    <div class="top-news__item">
                        <a class="top-news__title" href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <span><?php the_time(get_option('date_format')); ?></span>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <a href="./news" class="button">News</a>
    </div>
</section>


<section class="top-menu">
    <div class="container top-menu__container">
        <h2 class="section__title">Our Ramen</h2>
        <div class="top-menu__contents">
            <p class='top-menu__body'>
                Ramen Nobu sticks to using NO MSG, so that we can provide safe and REAL TASTED RAMEN to people of all ages.<br><br>
                We spare no effort to make our quality soup, with carefully selected ingredients. <br>
                We also use a secret seasoning source, which we finally found from long time trial and error.<br>
                Our specialty Ramen is made from a combination of this soup and source.
            </p>
            <img class="top-menu__img" src="<?php echo get_template_directory_uri() . "/assets/images/home/owner43.jpg"; ?>" alt="owner's photo">
        </div>
        <a href="./menu" class="button">Menu</a>
    </div>
</section>


<section class="top-contact">
    <div class="container top-contact__container">
        <h2 class="section__title">Japanese Ramen Culture and Our Spirits</h2>
        <div class="top-contact__contents">
            <p class="top-contact__body"> We opened Ramen Nobu out of desire to let Cairns people know about our Ramen Culture.
                We have been introducing that through our authentic Ramen range, which is... <br><br>
                &nbsp;&nbsp;Shoyu Ramen Tokyo Style - the origin of Japanese Ramen. <br>
                &nbsp;&nbsp;Tonkotsu Ramen Fukuoka Style - became a popular dish here in Australia. <br>
                &nbsp;&nbsp;TanTan Ramen Japanese Style - developed independently from the original
                style of China.<br><br>

                We keep working hard to improve our taste and develop new dishes. We wish we can
                introduce a variety of Ramens from all over Japan, in our style.
            </p>
            <img class="top-contact__img" src="<?php echo get_template_directory_uri() . "/assets/images/home/jp-map.png"; ?>" alt="Japan map">
        </div>

        <h3 class="accordion-title">About Japanese Ramen History</h3>
        <p class="accordion-body">The first ramen was imported from China in the Meiji Era
            (1868 - 1912). It was still not the same as Japanese Ramen nowadays. <br><br>

            Japanese Ramen started in 1910. A retired customs officer, Kan’ichi Ozaki, opened
            Chinese restaurant in Tokyo. He created Shoyu Ramen (soy source based), served it for a
            reasonable price. It became popular and slowly spread all over Japan.<br><br>

            Tonkotsu Ramen (pork broth based) was born in the west part of Japan, Kyushu, from
            a chef’s mistake, in 1947. He cooked the soup with strong fire by accident, which
            made it muddy white. He found it was nice and tasty, and decided to serve it as
            Tonkotsu Ramen. Now it is known as one of Kyushu's specialties.<br><br>

            Tan Tan Ramen was originally born in Sichuan, China, in the mid 19 century. It was
            noodle without soup, and tasted a bit different from the one in Japan nowadays.<br>
            It was brought to Japan by a great chef from China, Chen Jianmin (陳健民), who is the
            father of Sichuan cuisine in Japan. He arranged Tan Tan Ramen to match Japanese taste
            buds, using chilli oil and sesame paste, in soup.<br><br>

            After WWⅡ, when Japan became very poor, ramen became so popular at black markets
            as ingredients were not so expensive. It spread widely and a variety of ramen
            were developed in each area of Japan, with unique local ingredients.<br><br>

            That is the story of how ramen became Japanese national food.
        </p>
        <a href="./contact" class="button">Contact</a>

    </div>
</section>
<img class="bg-parallax rellax is-shown" id="parallax" data-rellax-speed="1.5" data-rellax-percentage="3" data-rellax-zindex="2" src="<?php echo get_template_directory_uri() . "/assets/images/home/header.png"; ?>" alt="background image">
<img class="bg-parallax noParallax" id="no-parallax" src="<?php echo get_template_directory_uri() . "/assets/images/home/header.png"; ?>" alt="background image">

<?php get_footer(); ?>