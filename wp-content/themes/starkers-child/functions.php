<?php

	// Woocomerce declaration
	add_theme_support( 'woocommerce' );

	function starkers_script_enqueuer() {		
	    
	}
	
	register_nav_menus(array(
		'primary' => 'Primary Navigation',
		'secondary' => 'Secondary Navigation'
		));
		
		if( !is_admin()){
			wp_deregister_script('jquery');
			// wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"), false, '1.9.0', true);
			wp_register_script('jquery', (get_stylesheet_directory_uri().'/js/vendors/jquery.min.js'), false, '1.9.0', true);
			wp_enqueue_script('jquery');
		}
		
		add_action('init', 'modify_jquery');
		
		
		function my_register_sidebars() {
		
			/* Register the 'primary' sidebar. */
			register_sidebar(
				array(
					'id' => 'primary',
					'name' => __( 'Primary' ),
					'description' => __( 'Primary sidebar.' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
			
			register_sidebar(
				array(
					'id' => 'secondary',
					'name' => __( 'Secondary' ),
					'description' => __( 'Secondary sidebars.' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
			
			register_sidebar(
				array(
					'id' => 'home',
					'name' => __( 'Home' ),
					'description' => __( 'Content on home page.' ),
					'before_widget' => '<div id="%1$s" class="col-"><div class="module">',
					'after_widget' => '</div></div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
			
			register_sidebar(
				array(
					'id' => 'footer',
					'name' => __( 'Footer' ),
					'description' => __( 'Content displayed in the footer.' ),
					'before_widget' => '<div id="%1$s" class="col-"><div class="module">',
					'after_widget' => '</div></div>',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>'
				)
			);
			
		
			/* Repeat register_sidebar() code for additional sidebars. */
		}
		
		add_action( 'widgets_init', 'my_register_sidebars' );

		function the_slug($echo=true){
		  $slug = basename(get_permalink());
		  do_action('before_slug', $slug);
		  $slug = apply_filters('slug_filter', $slug);
		  do_action('after_slug', $slug);
		  return $slug;
		}

		add_filter('show_admin_bar', '__return_false');


?>