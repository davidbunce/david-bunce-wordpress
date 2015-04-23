<?php
	require_once('types/portfolio-type.php');

	//////////////////////////////////////////////////////////////
	// Enqueue scripts and styles
	//////////////////////////////////////////////////////////////
	function davidbunce_scripts_method() {
	    wp_deregister_script( 'jquery' );
	    // JQuery
	    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
	    wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', '', '', true);

	    // Modernizer
	    // wp_register_script( 'dodifferent', get_bloginfo('template_directory') . '/js/modernizr.custom.js');
	    // wp_enqueue_script( 'dodifferent' );
	    wp_register_script( 'local-library', get_bloginfo('template_directory') . '/js/live/built.min.js');
	    wp_enqueue_script( 'local-library', get_bloginfo('template_directory') . '/js/live/built.min.js', array('jquery'), '', true);
	    // Navigation for responsive site
	   // wp_register_script( 'responsive-nav', get_bloginfo('template_directory') . '/js/responsive-nav.min.js');
	    // wp_enqueue_script( 'responsive-nav' );
	}

	function davidbunce_styles_method() {
	    wp_register_style( 'davidbunce-style', get_template_directory_uri() . '/css/stylesheet.css',
	        array(),
	        '20120809',
	        'all'
	    );

	    // enqueing:
	    wp_enqueue_style( 'davidbunce-style' );
	}


	//////////////////////////////////////////////////////////////
	// WPML
	//////////////////////////////////////////////////////////////
	function davidbunce_language_selector_header(){
	    $languages = icl_get_languages('skip_missing=0&orderby=code');
	    if(!empty($languages)){
	        foreach($languages as $l){
	            if(!$l['active']) echo '<a href="'.$l['url'].'">';
	            echo $l['native_name'];
	            if(!$l['active']) echo '</a>';
	        }
	    }
	}

	//////////////////////////////////////////////////////////////
	// Global Theme Settings
	//////////////////////////////////////////////////////////////
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('menus');
	add_theme_support('widgets');

	add_image_size('portfolio_item_small', 200, 180, true );

	//////////////////////////////////////////////////////////////
	// Filters
	//////////////////////////////////////////////////////////////
	add_filter('show_admin_bar', '__return_false');

	//////////////////////////////////////////////////////////////
	// Actions
	//////////////////////////////////////////////////////////////
	add_action('wp_enqueue_scripts', 'davidbunce_styles_method');
	add_action('wp_enqueue_scripts', 'davidbunce_scripts_method');
	//add_action( 'wp_print_scripts', 'wpml_deregister_scripts', 100 );

	remove_action( 'wp_head', 'wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
?>