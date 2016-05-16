<?php

/* add post formats
add_theme_support( 'post-formats', array( 'aside', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', 'gallery' ) );
*/

// This theme uses wp_nav_menu() in one location.
function register_theme_menu() {
  register_nav_menus( 'primary', 'Gingarte Navigation' );
}

add_action( 'init', 'register_theme_menu' );


// Year Shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
// Use [year] in your posts.
// from https://css-tricks.com/snippets/wordpress/year-shortcode


// REGISTERING WIDGET AREA

/**
 * Register our sidebars and widgetized areas.
 *
 */
function gingarte_widgets_init() {
// function was defined here, which not everyone does.

	register_sidebar( array(
		'name'          => 'Main Footer',
		'id'            => 'main_footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

// if a function was defined above, then you need to initiate it here, calling the function.
add_action( 'widgets_init', 'gingarte_widgets_init' );

// display posts by category.
function my_home_category( $fan_posts_query ) { if ( $fan_posts_query->is_home() && $fan_posts_query->is_main_query() ) { $fan_posts_query->set( 'cat', '3'); } }

add_action( 'pre_get_posts', 'my_home_category' );



// CLASSES PAGE USES A PLUGIN CALLED TABBY-RESPONSIVE-TABS.  TO STYLE THEM, THIS LINE IS ADDED TO PREVENT THE DEFAULT STYLES FROM LOADING.  THE EDITED STYLES ARE COPIED INTO THE CLASSES PAGE STYLE SHEET.
remove_action('wp_print_styles', 'cc_tabby_css', 30);

?>
