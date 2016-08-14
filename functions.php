<?php
/* ENQUEING CSS AND JS FILES.
It helps load faster.  Better practice.  See Alessandro's videos.
This functions.php file triggers the css and js files to load up at the start in the header and in the footer.
For functions that need to be executed before the page loads rest of content.
Should this be done for google fonts with an external url?  */
/* TRY TO KEEP FUNCTION NAMES UNIQUE.  in case other developers happen to use the same names.  */
/* ------------ NOT SURE WHY ENQUEING IS NOT WORKING.  AND LOTS OF EXTRA SCRIPT IN THE HEADER IN WEB INSPECTOR I'M NOT SURE OF.  
function gingarte_script_enqueue () {
  // first of five parameters are reqd.  first can be made-up name.  second is location to search which needs to be absolute.  third holds dependencies, which we don't have so there's an empty array.  fourth is version number you can make up.  fifth is for media to specify what kind/all devices&scenarios.  fifth for printing js in the header or footer by default, it's in the header.
  wp_enqueue_style('gingstyle', get_template_directory_uri() . 'css/gingarte.css', array(), '1.0', 'all');
  wp_enqueue_style('gingjs', get_template_directory_uri() . 'js/gingarte.js', array(), '1.0', true);
}
add_action(wp_enqueue_scripts, 'gingarte_script_enqueue'); // hooks tells WP when to trigger the function you just made, i.e. when WP is when all scripts are being loaded, second: which function.  also, remember you need to add a hook to locate the header file.
-------------*/

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
