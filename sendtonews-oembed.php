<?php
/**
 * Plugin Name: STN Video oEmbed
 * Plugin URI: http://wordpress.org/plugins/sendtonews-oembed/
 * Description: This plugin adds oEmbed support for STN Video videos
 * Version: 1.0.2
 * Author: STN Video
 * Author URI: https://www.stnvideo.com
 * License: GNU General Public License v2
 */

// Register oEmbed providers
function s2n_oembed_provider() {
	if ( ! function_exists( 'wp_oembed_add_provider' ) ) {
		require_once ABSPATH . WPINC . '/embed.php';
	}
	wp_oembed_add_provider( '#https?://embed.sendtonews\.com/.*#i', 'https://embed.sendtonews.com/services/oembed', true );
}

add_action( 'init', 's2n_oembed_provider' );
