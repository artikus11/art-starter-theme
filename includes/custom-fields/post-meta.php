<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Custom Data')
         ->show_on_post_type('page')
         ->add_fields(array(
	         Field::make('map', 'crb_location')->set_position(37.423156, -122.084917, 14),
	         Field::make('choose_sidebar', 'crb_custom_sidebar'),
	         Field::make('image', 'crb_photo'),
         ));