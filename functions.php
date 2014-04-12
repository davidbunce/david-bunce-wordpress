<?php

	/**
	 * Filter the page title.
	 *
	 * Creates a nicely formatted and more specific title element text for output
	 * in head of document, based on current view.
	 *
	 * @since Twenty Thirteen 1.0
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep   Optional separator.
	 * @return string The filtered title.
	 */
	function twentythirteen_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

		// Add the site name.
		$title .= get_bloginfo( 'name' );

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'twentythirteen_wp_title', 10, 2 );

	//////////////////////////////////////////////////////////////
	// Enqueue scripts and styles
	//////////////////////////////////////////////////////////////
	function davidbunce_scripts_method() {
	    wp_deregister_script( 'jquery' );
	    // JQuery
	    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
	    wp_enqueue_script( 'jquery' );

	    // Modernizer
	    // wp_register_script( 'dodifferent', get_bloginfo('template_directory') . '/js/modernizr.custom.js');
	    // wp_enqueue_script( 'dodifferent' );
	    wp_register_script( 'local-library', get_bloginfo('template_directory') . '/js/live/built.min.js');
	    wp_enqueue_script( 'local-library' );
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
	// Global Theme Settings
	//////////////////////////////////////////////////////////////
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('menus');
	add_theme_support('widgets');

	//////////////////////////////////////////////////////////////
	// Filters
	//////////////////////////////////////////////////////////////
	add_filter('show_admin_bar', '__return_false');

	//////////////////////////////////////////////////////////////
	// Actions
	//////////////////////////////////////////////////////////////
	add_action('wp_enqueue_scripts', 'davidbunce_styles_method');
	add_action('wp_enqueue_scripts', 'davidbunce_scripts_method');

	remove_action( 'wp_head', 'wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
?>