<?php get_header() ?>

<section class="top">
    <?php the_post_thumbnail('full', array('class' => 'top__img')); ?>
    <h1 class="page__title">Contact Us</h1>
</section>

<section class="form">
    <div class="container form__container">
        <h2 class="section__title">Send Message</h2>
        <div class="form__form-area">
            <?php echo do_shortcode('[wpforms id="65" title="false"]'); ?>
            <img class="form__illust" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/speech1-1.png" alt="illustrated speaking girl">
        </div>
    </div>
</section>


<?php get_footer(); ?>