<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/967f098682.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
    <header>
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/RamenNobu_logo.JPG" alt="Ramen Nobu Logo" class="header-logo__img">
            <a href="<?php echo home_url(); ?>" class="header-logo__text">Ramen Nobu</a>
        </div>
        <!-- ↓ ハンバーガーメニュー用 ↓ -->
        <input type="checkbox" name="res" id="hamburger__toggle" class="hamburger__toggle">
        <label for="hamburger__toggle" id="hamburger__icon" class="hamburger__icon"><span id="hamburger__line" class="hamburger__line"></span></label>
        <label for="hamburger__toggle" id="hamburger__background" class="hamburger__background"></label>
        <!-- ↑ ハンバーガーメニュー用 ↑ -->
        <nav class="header__nav hamburger__nav">
            <!-- WPメニュー -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-nav'
            ));
            ?>
            <!-- 初回アクセス時に表示される「このサイトについて」ウィンドウを再表示するためのボタン -->
            <button class="button header__welcome" id="header__welcome">このサイトについて</button>
            <!-- SP、Tab用スライドメニュー内の外部リンク -->
            <div class="slide-menu__external-link">
                <div class="slide-menu__sns">
                    <p class="slide-menu__link-title">Follow Us</p>
                    <a href="https://www.facebook.com/ramen.nobu.cairns.page" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square slide-menu__sns-icon"></i></a>
                    <a href="https://www.instagram.com/ramen_nobu/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram-square slide-menu__sns-icon"></i></a>
                </div>
                <div class="slide-menu__uber">
                    <p class="slide-menu__link-title">Order Now</p>
                    <a class="slide-menu__uber-icon" href="https://www.ubereats.com/au/cairns/food-delivery/ramen-nobu/-tuzh0pIQpq0uSbnGdDsvA" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/uber-eats.svg" alt="uber eats logo"></a>
                </div>
            </div> <!-- .slide-menu__external-link -->
        </nav>
    </header>



    <!-- 初回訪問時に表示される「このサイトについて」ウィンドウ -->
    <div class="welcome" id="welcome">
        <i class="fas fa-times fa-2x welcome__close" id="welcome__close"></i>
        <h2 class="section__title">このサイトに<br class="sp-br">ついて</h2>
        <p class="welcome__body">このサイトは私、上田隼也が、実際の案件で納品したものを元に、使用可能な技術を全て盛り込んで作成した技術見本です。（顧客の使用許可取得済みです）<br>
            発注をご検討いただく際の判断材料としてご覧いただければ幸いです。
        </p>
        <div class="welcome__skill">
            <h3 class="skill__title">使用技術</h3>
            <ul class="skill__list">
                <li class="skill__list-item">adobe XDを使用したデザイン</li>
                <li class="skill__list-item">HTML、SCSS、Javascript、PHPを使用したコーディング</li>
                <li class="skill__list-item">レスポンシブ対応</li>
                <li class="skill__list-item">SCSS、Javascriptのモジュール化</li>
                <li class="skill__list-item">PHPによるHTMLのパーツ化</li>
                <li class="skill__list-item">WordPressカスタムテンプレート化</li>
                <li class="skill__list-item">swiper.jsによるスライドショー</li>
                <li class="skill__list-item">Webpackを用いたSCSS、Javascriptファイルのバンドル、高速化</li>
                <li class="skill__list-item">babel、polyfillによるIE11対応</li>
                <li class="skill__list-item">session storageによるセッション管理（このウィンドウを初回のみ表示させます）</li>
                <li class="skill__list-item"><a href="https://github.com/ju-au/Skill-Portfolio.git" target="_blank">コードはこちら（github）</a></li>
            </ul>
        </div> <!-- .welcome__skill -->
        <p>このウィンドウは、メニューから再度表示いただけます。</p>
    </div> <!-- .welcome -->
