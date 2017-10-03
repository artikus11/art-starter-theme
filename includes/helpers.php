<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/*== Debug fuctions ==*/
/**
 * Debug function print_r
 *
 * @param mixed $var
 * @param boolean $die
 */
function pr( $var, $die = true ) {
	echo '<pre>';
	print_r( $var );
	echo '</pre>';
	if ( $die ) {
		die();
	}
}

/**
 * Debug function var_dump
 *
 * @param mixed $var
 * @param boolean $die
 */
function vd( $var, $die = true ) {
	echo '<pre>';
	var_dump( $var );
	echo '</pre>';
	if ( $die ) {
		die();
	}
}

/**
 * Функция
 * @param $item_url
 *
 * @return mixed|string
 */
function art_social_icons( $item_url ) {
	
	$social_icons = apply_filters( 'art_social_icons', array(
		'codepen.io'      => 'codepen',
		'digg.com'        => 'digg',
		'dribbble.com'    => 'dribbble',
		'dropbox.com'     => 'dropbox',
		'facebook.com'    => 'facebook',
		'flickr.com'      => 'flickr',
		'foursquare.com'  => 'foursquare',
		'plus.google.com' => 'googleplus',
		'github.com'      => 'github',
		'instagram.com'   => 'instagram',
		'linkedin.com'    => 'linkedin-alt',
		'mailto:'         => 'mail',
		'pinterest.com'   => 'pinterest-alt',
		'getpocket.com'   => 'pocket',
		'polldaddy.com'   => 'polldaddy',
		'reddit.com'      => 'reddit',
		'skype.com'       => 'skype',
		'skype:'          => 'skype',
		'soundcloud.com'  => 'cloud',
		'spotify.com'     => 'spotify',
		'stumbleupon.com' => 'stumbleupon',
		'tumblr.com'      => 'tumblr',
		'twitch.tv'       => 'twitch',
		'twitter.com'     => 'twitter',
		'vimeo.com'       => 'vimeo',
		'vk.com'          => 'vk',
		'wordpress.org'   => 'wordpress',
		'wordpress.com'   => 'wordpress',
		'youtube.com'     => 'youtube',
	) );
	$item_label   = '';
	foreach ( $social_icons as $attr => $value ) {
		if ( false !== strpos( $item_url, $attr ) ) {
			$item_label = str_replace( $item_url, esc_attr( $value ), $item_url );
		}
	}
	
	return $item_label;
}

