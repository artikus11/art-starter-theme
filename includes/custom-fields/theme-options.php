<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
Container::make('theme_options', 'basic option')
         ->add_fields(array(
	         Field::make('header_scripts', 'crb_header_script'),
	         Field::make('footer_scripts', 'crb_footer_script'),
         ));

// Add second options page under 'Basic Options'
Container::make('theme_options', 'Social Links')
         ->set_page_parent('Настройки темы')  // title of a top level Theme Options page
         ->add_fields(array(
		Field::make('text', 'crb_facebook_link', 'попр'),
		Field::make('text', 'crb_twitter_link')
	));

// Add third options page under "Appearance"
Container::make('theme_options', 'Customize Background')
			->set_page_parent('themes.php')
            ->add_fields(array(
		Field::make('color', 'crb_background_color'),
		Field::make('image', 'crb_background_image')
	));