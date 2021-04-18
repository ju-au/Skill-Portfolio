<?php get_header() ?>


<section class="top">
        <h1 class="page__title page_-title--single"><?php the_title(); ?></h1>
        <?php the_post_thumbnail('full', array('class' => 'top__img top__img--single')); ?>
</section>


<section class="single">
    <nav class="breadcrumb-list">
        <a href="<?php echo home_url(); ?>">Home</a><span>&nbsp;&nbsp;&gt;&nbsp;&nbsp;</span><a href="<?php echo home_url('/news'); ?>">News</a><span>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<?php echo the_title(); ?></span>
    </nav>
    <div class="container single__container">
        <div class="single__inner">
            <div class="single__news-area">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="single__news">
                            <div class="single__headline">
                                <h3 class="single__title"><?php the_title(); ?></h3>
                                <p class="single__date"><?php the_time(get_option('date_format')); ?></p>
                            </div>
                            <div class="single__body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div> <!-- .single__news-area -->
            <div class="single__sns">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Framen.nobu.cairns.page%2F&tabs=timeline&width=250&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <img class="single__illust" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/point1-2.png" alt="">
            </div>
        </div> <!-- .single__inner -->
    </div> <!-- .single__container -->
</section> <!-- .single -->


<?php get_footer(); ?>