<?php
/**
 * Plugin Name: EVM Content Pages
 * Description: Standalone shortcode-based content pages for marketing sections.
 * Version: 0.1.0
 * Author: Codex
 * Text Domain: evm-content-pages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EVM_CONTENT_PAGES_VERSION', '0.2.12' );
define( 'EVM_CONTENT_PAGES_PATH', plugin_dir_path( __FILE__ ) );
define( 'EVM_CONTENT_PAGES_URL', plugin_dir_url( __FILE__ ) );

require_once EVM_CONTENT_PAGES_PATH . 'includes/render-evm-content-page-01.php';

/**
 * Registers plugin assets.
 *
 * @return void
 */
function evm_content_pages_register_assets() {
	wp_register_style(
		'evm-content-page-01',
		EVM_CONTENT_PAGES_URL . 'assets/css/evm-content-page-01.css',
		array(),
		EVM_CONTENT_PAGES_VERSION
	);

	wp_register_script(
		'evm-content-page-01',
		EVM_CONTENT_PAGES_URL . 'assets/js/evm-content-page-01.js',
		array(),
		EVM_CONTENT_PAGES_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'evm_content_pages_register_assets' );

/**
 * Registers the navigation menu used by the GameIt landing-page header.
 *
 * @return void
 */
function evm_content_pages_register_navigation_menus() {
	register_nav_menus(
		array(
			'evm_gameit_primary_navigation' => __( 'GameIt Primary Navigation', 'evm-content-pages' ),
		)
	);
}
add_action( 'after_setup_theme', 'evm_content_pages_register_navigation_menus' );

/**
 * Checks whether the current singular content contains the shortcode.
 *
 * @return bool
 */
function evm_content_pages_has_shortcode_on_current_page() {
	if ( ! is_singular() ) {
		return false;
	}

	$post = get_queried_object();

	if ( ! $post instanceof WP_Post ) {
		return false;
	}

	return has_shortcode( $post->post_content, 'evm_content_page_01' );
}

/**
 * Enqueues assets only when the shortcode is present on the current page.
 *
 * @return void
 */
function evm_content_pages_maybe_enqueue_shortcode_assets() {
	if ( evm_content_pages_has_shortcode_on_current_page() ) {
		wp_enqueue_style( 'evm-content-page-01' );
		wp_enqueue_script( 'evm-content-page-01' );
	}
}
add_action( 'wp_enqueue_scripts', 'evm_content_pages_maybe_enqueue_shortcode_assets', 20 );

/**
 * Adds a body class on pages using the EVM content page shortcode.
 *
 * @param string[] $classes Existing body classes.
 * @return string[]
 */
function evm_content_pages_add_body_class( $classes ) {
	if ( evm_content_pages_has_shortcode_on_current_page() ) {
		$classes[] = 'evm-content-page-01-active';
		$classes[] = 'evm-gameit-landing-page';
	}

	return $classes;
}
add_filter( 'body_class', 'evm_content_pages_add_body_class' );

/**
 * Renders the content page shortcode.
 *
 * Editable defaults live in the render include file. High-change URLs and
 * labels can also be overridden directly in the shortcode markup.
 *
 * @param array<string, string> $atts Shortcode attributes.
 * @return string
 */
function evm_content_page_01_shortcode( $atts ) {
	wp_enqueue_style( 'evm-content-page-01' );
	wp_enqueue_script( 'evm-content-page-01' );

	$attributes = shortcode_atts(
		array(
			'primary_cta_url'        => '',
			'whatsapp_url'           => '',
			'heroes_room_url'        => '',
			'shadows_room_url'       => '',
			'hero_image_url'         => '',
			'hero_video_mp4_url'     => '',
			'hero_video_webm_url'    => '',
			'hero_video_poster_url'  => '',
			'hero_youtube_url'       => '',
			'primary_cta_text'       => '',
		),
		(array) $atts,
		'evm_content_page_01'
	);

	return evm_render_content_page_01( $attributes );
}
add_shortcode( 'evm_content_page_01', 'evm_content_page_01_shortcode' );
