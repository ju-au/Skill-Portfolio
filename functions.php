<?php
function registerFiles()
{
	// ページによって必要なcss,jsを読み込む
	// if (is_front_page()) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/index.css";
	// 	// wp_enqueue_script('rellax-script', get_template_directory_uri() . "/assets/js/plugin/rellax-master/rellax.min.js");
	// 	// wp_enqueue_script('index-script', get_template_directory_uri() . "/assets/js/index.js", array('rellax-script', 'swipe-script'), false, true);
	// };
	// if (is_page("menu")) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/menu.css";
	// };
	// if (is_page("news")) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/news.css";
	// };
	// if (is_page("location")) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/location.css";
	// 	// wp_enqueue_script('location-script', get_template_directory_uri() . "/assets/js/location.js", array('swipe-script'), false, true);
	// };
	// if (is_page("contact")) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/contact.css";
	// };
	// if (is_page("thanks")) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/thanks.css";
	// };
	// if (is_single()) {
	// 	$cssFile = get_template_directory_uri() . "/assets/css/single.css";
	// };
	
	// 全ページでblank.jsを読み込み
	wp_enqueue_script('bundle-script', get_template_directory_uri() . "/assets/dist/bundle.js", array(), false, true);
	// wp_enqueue_script('blank-script', get_template_directory_uri() . "/assets/js/blank.js", array(), false, true);

	// $cssFile = get_template_directory_uri() . "/assets/dist/style.css";
	// // // CSSスタイルファイルをキューに追加
	// wp_register_style('style', $cssFile, false);
	// wp_enqueue_style('style');
	// // style.cssファイルを読み込み
	// $css = file_get_contents($cssFile, true);
	// // インラインにCSSの内容を出力
	// wp_add_inline_style('style', $css);

	// swipe.jsの読み込み
	// wp_enqueue_style('swipe-css', '//unpkg.com/swiper/swiper-bundle.min.css');
	// wp_enqueue_script('swipe-script', '//unpkg.com/swiper/swiper-bundle.min.js',array(), false, true);


}
add_action('wp_enqueue_scripts', 'registerFiles');


add_action('after_setup_theme', function () {
	add_theme_support('title-tag');
	register_nav_menu(
		'header-nav',
		'Header Navigation'
	);
});

add_action('init', function() {
	add_theme_support('post-thumbnails');
});
