<?php get_header() ?>

<section class="top">
    <?php the_post_thumbnail('full', array('class' => 'top__img')); ?>
</section>

<section class="thanks">
    <div class="container">
        <h2 class="section__title">Your message has been sent</h2>
        <a href="<?php echo home_url(); ?>" class="button">Home</a>
    </div>
</section>

<?php get_footer(); ?>