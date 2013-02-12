<?php

// Additional debug info
if ( WP_DEBUG && ! defined( 'SAVEQUERIES' ) )
{
	define( 'SAVEQUERIES', true );
}

new WP_Theme_GeertDD;

class WP_Theme_GeertDD {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'init', array( $this, 'clean_up_head' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_styles_and_scripts' ) );
	}

	public function setup() {
		// register nav, sidebar, etc.
	}

	public function load_styles_and_scripts() {
		// Register all stylesheets
		wp_register_style( 'geertdd', get_stylesheet_directory_uri() . '/css/geertdd.css', null, null );

		// Register all JavaScript files
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.min.js', null, null );
		wp_register_script( 'geertdd', get_stylesheet_directory_uri() . '/js/geertdd.js', array( 'modernizr', 'jquery' ), null, true );
		wp_localize_script( 'geertdd', 'GEERTDD', array(
			'theme_url' => get_stylesheet_directory_uri(),
		) );

		// Now load whatever needed
		wp_enqueue_style( 'geertdd' );
		wp_enqueue_script( 'geertdd' );
	}

	public function clean_up_head() {
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
	}

}
