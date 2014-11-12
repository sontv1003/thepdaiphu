<?php
add_action( 'after_setup_theme', 'my_setup' );

if ( ! function_exists( 'my_setup' ) ):
	function my_setup() {
		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();

		// This theme uses post thumbnails
		if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
			add_theme_support( 'post-thumbnails' );
			set_post_thumbnail_size( 300, 225, true ); // Normal post thumbnails
			add_image_size( 'slider-post-thumbnail', 957, 425, true ); // Slider Thumbnail
			add_image_size( 'slider-thumb', 100, 50, true ); // Slider Small Thumbnail
		}

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// custom menu support
		add_theme_support( 'menus' );
		if ( function_exists( 'register_nav_menus' ) ) {
			register_nav_menus(
				array(
					'header_menu' => theme_locals("header_menu"),
					'footer_menu' => theme_locals("footer_menu")
				)
			);
		}
	}
endif;

/* Slider */
function my_post_type_slider() {
	register_post_type( 'slider',
		array( 
			'label'               => 'Trình diễn', 
			'singular_label'      => theme_locals("slides"),
			'_builtin'            => false,
			'exclude_from_search' => true, // Exclude from Search Results
			'capability_type'     => 'page',
			'public'              => true, 
			'show_ui'             => true,
			'show_in_nav_menus'   => false,
			'rewrite' => array(
						'slug'       => 'trinh-dien',
						'with_front' => FALSE,
			),
			'query_var' => "slide", // This goes to the WP_Query schema
			'menu_icon' => get_template_directory_uri() . '/includes/images/icon_slides.png',
			'supports'  => array(
							'title',
							'custom-fields',
							'thumbnail'
			)
		)
	);
}
add_action('init', 'my_post_type_slider');

/* Portfolio */
function my_post_type_portfolio() {
	register_post_type( 'portfolio',
		array( 
				'label'             => __('Sản phẩm', CURRENT_THEME),
				'singular_label'    => theme_locals("portfolio"),
				'_builtin'          => false,
				'public'            => true, 
				'show_ui'           => true,
				'show_in_nav_menus' => true,
				'hierarchical'      => true,
				'capability_type'   => 'page',
				'menu_icon'         => get_template_directory_uri() . '/includes/images/icon_portfolio.png',
				'rewrite'           => array(
					'slug'       => 'san-pham',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
						'comments')
					) 
				);
	register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => theme_locals("categories"), 'singular_name' => theme_locals("category"), "rewrite" => true, "query_var" => true));
	register_taxonomy('portfolio_tag', 'portfolio', array('hierarchical' => false, 'label' => theme_locals("tags"), 'singular_name' => theme_locals("tag"), 'rewrite' => true, 'query_var' => true));
}
add_action('init', 'my_post_type_portfolio');

/* Testimonial */
function my_post_type_testi() {
	register_post_type( 'testi',
		array( 
				'label'             => theme_locals("testimonial"), 
				'public'            => true, 
				'show_ui'           => true,
				'show_in_nav_menus' => false,
				'menu_position'     => 5,
				'rewrite'           => array(
					'slug'       => 'testimonial-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'custom-fields',
						'thumbnail',
						'editor')
					) 
				);
}
add_action('init', 'my_post_type_testi');

/* Services */
function my_post_type_services() {
	register_post_type( 'services',
		array( 
				'label'             => 'Dịch vụ', 
				'public'            => true, 
				'show_ui'           => true,
				'show_in_nav_menus' => false,
				'menu_position'     => 5,
				'rewrite'           => array(
					'slug'       => 'dich-vu',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'thumbnail',
						'editor')
					) 
				);
}
add_action('init', 'my_post_type_services');

/* FAQs */
function phi_post_type_faq() {
	register_post_type('faq', 
		array(
				'label'               => 'Hỏi đáp',
				'singular_label'      => theme_locals("faqs"),
				'public'              => false,
				'show_ui'             => true,
				'_builtin'            => false, // It's a custom post type, not built in
				'_edit_link'          => 'post.php?post=%d',
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'rewrite'             => array("slug" => "hoi-dap"), // Permalinks
				'query_var'           => "faq", // This goes to the WP_Query schema
				'supports'            => array('title','author','editor'),
				'menu_position'       => 5,
				'publicly_queryable'  => true,
				'exclude_from_search' => false,
				)
		);
}
add_action('init', 'phi_post_type_faq');

/* Our Team */
function my_post_type_team() {
	register_post_type( 'team',
		array( 
				'label'               => 'Nhân sự', 
				'singular_label'      => theme_locals("our_team"),
				'_builtin'            => false,
				// 'exclude_from_search' => true, // Exclude from Search Results
				'capability_type'     => 'page',
				'public'              => true, 
				'show_ui'             => true,
				'show_in_nav_menus'   => false,
				'menu_position'       => 5,
				'rewrite'             => array(
					'slug'       => 'nhan-su',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'custom-fields',
						'editor',
						'thumbnail')
					) 
				);
}
add_action('init', 'my_post_type_team');
?>