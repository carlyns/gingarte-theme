<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/music.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

	<div class="contents">
  	<!-- This defines the variable $postid to be used in the following function. --><?php $postid = get_the_ID(); ?>
		<?php echo get_post_meta($postid, 'Tagline', true); ?>
	</div>

</header>

<?php include ('menu.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>

	<div class="songtypenav">
		<p>
			<a href="<?php get_page_template(); ?>/gingarte/resources/music"><< Back to Music</a>
		</p>


		<?php /* UNCOMMENT TO SHOW TAG LIST, NEEDS STYLING
		$tags = get_tags( array('orderby' => 'count', 'order' => 'DESC') );
		foreach ( (array) $tags as $tag ) {
		echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' (' . $tag->count . ') </a>';
		}
		*/
		?>
		<h1>All Songs</h1>
		<h4>
			(More coming soon ... )
		</h4>

	</div>


<div class="songlist">
	<?php
		// $currentPage = get_query_var('paged'); select the 'paged' variable.  initially empty and set at zero.  need to replace it with at least 1.

		$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1; //steamlined if statement asking if 'paged' is already an integer, then use that current page number.  otherwise use the number 1.

		$args = array(
			'post_type' => 'lyrics',
	    'posts_per_page' => -1, /* SHOW ALL POSTS*/
			'orderby' => 'title',
			'order' => 'ASC',	// added 'orderby' and 'order' to alphabetize.
			'paged' => $currentPage, // returns posts on specific page, so need to pass current page as a dynamic value.  this is why $currentPage is defined above.
	    );
		?>

		<?php
		$loop = new WP_Query( $args ); //Define the loop based on arguments
		query_posts($args); // still need this for pagination to show up ... but not suppost to use queryposts because it is the main loop!
		?>

		<?php
		//Display the contents
		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

		<!-- TAG SONG TYPES??-->

	<?php endwhile; ?>


	<!-- UNCOMMENT TO SHOW PAGINATION NAVIGATION!
	<div class="pagination">
		<div class="nav-previous"><?php previous_posts_link( '<< Previous Page' ); ?></div>
		<div class="nav-next"><?php next_posts_link( 'Next Page >>' ); ?></div>
	-->

	<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif;
	wp_reset_query();
	?>
</div>


</div>



<?php get_footer(); ?>
