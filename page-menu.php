<?php get_header() ?>

<section class="top">
    <?php the_post_thumbnail('full', array('class' => 'top__img')); ?>
    <h1 class="page__title">Menu</h1>
</section>

<section class="ramen">
    <div class="container ramen__container">
        <h2 class="section__title">Ramen</h2>
        <div class="menu__contents ramen__contents">
            <div class="menu__item ramen__item">
                <div class="menu__illust-position">
                    <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/menu-shoyu.png" alt="shoyu tokyo style ramen photo">
                    <img class="menu__illust shoyu" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/oishisou1.png" alt="illustrated eating girl">
                </div>
                <h3 class="menu__name">Shoyu <br class="tab-br">Tokyo Style</h3>
                <p class="menu__price">$15.90</p>
                <p class="menu__disc">Noodle with a soup made from Chicken broth with soy sauce.</p>
            </div> <!-- .ramen__item-->
            <div class="menu__item ramen__item">
                <div class="menu__illust-position">
                    <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/menu-tonkotu.png" alt="tonkotu fukuoka style ramen photo">
                    <img class="menu__illust tonkotsu" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/point.png" alt="illustrated girl pointing at ramen">
                </div>
                <h3 class="menu__name">Tonkotu <br class="tab-br"> Fukuoka Style</h3>
                <p class="menu__price">$15.90</p>
                <p class="menu__disc">Noodle with a soup made from pork broth with some secret ingredients.</p>
            </div> <!-- .ramen__item-->
            <div class="menu__item ramen__item">
                <div class="menu__illust-position">
                    <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/menu-tantan.png" alt="tan tan japanese style ramen photo">
                    <img class="menu__illust tantan" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/tantan1.png" alt="tan tan girl illust">
                </div>
                <h3 class="menu__name">Tan Tan <br class="tab-br">Japanese Style</h3>
                <p class="menu__price">$15.90</p>
                <p class="menu__disc">Noodle with a soup made from Chicken broth with sesame paste and chili oil.</p>
            </div> <!-- .ramen__item-->
            <!-- flex用の空アイテム -->
            <div class="menu__item ramen__item"></div>
        </div> <!-- .ramen__contents -->

        <h3 class="topping__title">Extra Toppings</h3>
        <div class="menu__contents topping__contents">
            <div class="menu__item topping__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/porkbelly.png" alt="pork belly photo">
                <h4 class="menu__name topping__name">Pork Belly</h4>
                <p class="menu__price topping__price">$3.50/ea</p>
            </div>
            <div class="menu__item topping__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/chicken.png" alt="Chicken Slice photo">
                <h4 class="menu__name topping__name">Chicken Slice</h4>
                <p class="menu__price topping__price">$2.50</p>
            </div>
            <div class="menu__item topping__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/beansprout.png" alt="Bean Sprout photo">
                <h4 class="menu__name topping__name">Bean Sprout</h4>
                <p class="menu__price topping__price">$2.00</p>
            </div>
            <div class="menu__item topping__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/cabbage.png" alt="Cabbage photo">
                <h4 class="menu__name topping__name">Cabbage</h4>
                <p class="menu__price topping__price">$2.00</p>
            </div>
            <div class="menu__item topping__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/egg.png" alt="egg photo">
                <h4 class="menu__name topping__name">Tamago<br>(Flavoured Egg)</h4>
                <p class="menu__price topping__price">$1.00</p>
            </div>
            <div class="menu__item topping__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/kaedama.png" alt="Extra Noodle photo">
                <h4 class="menu__name topping__name">Kaedama<br>(Extra Noodle)</h4>
                <p class="menu__price topping__price">$3.00</p>
            </div>
        </div> <!-- .topping__contents -->
    </div> <!-- .ramen__container -->
</section> <!-- .ramen -->


<section class="grab">
    <div class="container grab__container">
        <h2 class="section__title">Grab and Go Menu </h2>
        <div class="menu__contents grab__contents">
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/karaage43near.jpg" alt="karaage chicken photo">
                <h3 class="menu__name">Karaage</h3>
                <p class="menu__price">$7.00</p>
                <p class="menu__disc">Boneless fried chicken</p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/p-gyoza43.jpg" alt="pork gyoza photo">
                <h3 class="menu__name">Pork Gyoza (5pc)</h3>
                <p class="menu__price">$7.00</p>
                <p class="menu__disc">Japanese HOME-MAID Pork Dumpling</p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/v-gyoza43.jpg" alt="vegetable gyoza photo">
                <h3 class="menu__name">Vegetable Gyoza (5pc)</h3>
                <p class="menu__price">$7.00</p>
                <p class="menu__disc">Japanese HOME-MAID Vegetable Dumpling</p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/pork-don43.jpg" alt="Charsew rice photo">
                <h3 class="menu__name">Charsew Rice</h3>
                <p class="menu__price">$13.80</p>
                <p class="menu__disc">Flavoured Pork on Rice</p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/chicken-don43near.jpg" alt="Teriyaki Chicken Rice photo">
                <h3 class="menu__name">Teriyaki Chicken Rice</h3>
                <p class="menu__price">$13.80</p>
                <p class="menu__disc">Teriyaki Chicken on Rice</p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/s-roll43near.jpg" alt="spring roll photo">
                <h3 class="menu__name">Spring Roll (Vege)</h3>
                <p class="menu__price">$2.50/ea</p>
                <p class="menu__disc"></p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bun43near.jpg" alt="pork bun photo">
                <h3 class="menu__name">Steamed Pork Bun</h3>
                <p class="menu__price">$5.00</p>
                <p class="menu__disc"></p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/dimsim43.jpg" alt="dim sim photo">
                <h3 class="menu__name">Steamed Dim Sim (2pc)</h3>
                <p class="menu__price">$6.00</p>
                <p class="menu__disc"></p>
            </div>
            <div class="menu__item grab__item">
                <img class="menu__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/rice43.jpg" alt="Rice photo">
                <h3 class="menu__name">Rice</h3>
                <p class="menu__price">$3.00</p>
                <p class="menu__disc"></p>
            </div>
        </div> <!-- .grab__contents -->
        <p class="allergic-notice">Please be advised that food prepared here may contain these ingredient :<br>
            Milk, Eggs, Wheat, Soybean, Peanuts</p>
    </div> <!-- .grab__container -->
</section> <!-- .grab -->
<?php get_footer(); ?>