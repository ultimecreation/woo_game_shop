<?php

function woo_game_shop_styles()
{
	wp_enqueue_style(
		'woo-game-shop-general',
		get_template_directory_uri() . '/assets/css/woo-game-shop.css',
		[],
		wp_get_theme()->get('Version')
	);
	wp_enqueue_script(
		'woo-game-shop-general',
		get_template_directory_uri() . '/assets/js/woo-game-shop.js',
		[],
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'woo_game_shop_styles');

function woo_game_shop_google_fonts()
{
	$font_url = "";
	$font = "Urbanist";
	$font_extra = "ital,wght@0,400;0,700;1,400;1,700";
	if ('off' !== _x('on', 'Google font: on or off', 'woo-game-shop')) {
		$query_args = array(
			'family' => urldecode("{$font}:{$font_extra}"),
			'subsets' => urldecode('latin,latin-ext'),
			'display' => urldecode('swap')
		);
		$font_url = add_query_arg($query_args, "//fonts.googleapis.com/css2");
	}
	return $font_url;
}

function woo_game_shop_google_fonts_script()
{
	wp_enqueue_style(
		'woo-game-shop-fonts',
		woo_game_shop_google_fonts(),
		[],
		'1.0.0'
	);

}
add_action('wp_enqueue_scripts', 'woo_game_shop_google_fonts_script');