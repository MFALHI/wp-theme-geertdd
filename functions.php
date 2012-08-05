<?php

new WP_Theme_GeertDD;

class WP_Theme_GeertDD {

	public function __construct()
	{
		add_action('after_theme_setup', array($this, 'setup'));
		add_action('init', array($this, 'clean_up_head'));
		add_action('wp_enqueue_scripts', array($this, 'load_styles_and_scripts'));
	}

	public function setup()
	{
		// register nav, sidebar, etc.
	}

	public function load_styles_and_scripts()
	{
		wp_register_style('geertdd', get_stylesheet_directory_uri().'/css/geertdd.css', NULL, NULL);
		wp_enqueue_style('geertdd');
	}

	public function clean_up_head()
	{
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
	}

}
