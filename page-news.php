<?php get_header() ?>


<section class="top">
    <?php the_post_thumbnail('full', array('class' => 'top__img')); ?>
    <h1 class="page__title">News</h1>
</section>


<section class="topics">
    <div class="container topics__container">
        <h2 class="section__title">Topics</h2>
        <div class="topics__inner">
            <div class="topics__news-area">
                <?php
                $args = array('post-type' => 'post');
                $posts = new WP_Query($args);
                if ($posts->have_posts()) :
                    while ($posts->have_posts()) : $posts->the_post();
                ?>
                        <div class="news-area__item">
                            <a href="<?php the_permalink(); ?>" class="news-area__link">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'news-area__thumbnail', 'alt' => 'post thumbnail')); ?>
                                <div class="news-area__body">
                                    <h3 class="news-area__title"><?php the_title(); ?></h3>
                                    <p class="news-area__date"><?php the_time(get_option('date_format')); ?></p>
                                </div>
                            </a>
                        </div> <!-- .news-area__item -->
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div> <!-- .topics__news-area -->
            <div class="topics__sns">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Framen.nobu.cairns.page%2F&tabs=timeline&width=250&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <img class="topic__illust" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/point1-2.png" alt="">
            </div> <!-- .topics__sns -->
        </div> <!-- .topics__inner -->
    </div> <!-- .topics__container -->
</section> <!-- .topics -->


<?php get_footer(); ?>