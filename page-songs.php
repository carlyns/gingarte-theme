<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/music.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

</header>

<?php include ('menu.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>

	<div class="songtypenav">
		<p class="breadcrumbs">
			<a href="<?php echo site_url(); ?>/gingarte/resources/music"><< Back to Music</a>
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
	</div>   <!-- end of "songtypenav" -->


<div class="songlist">
	<?php
		// $currentPage = get_query_var('paged'); select the 'paged' variable.  initially empty and set at zero.  need to replace it with at least 1.

		$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1; //steamlined if statement asking if 'paged' is already an integer, then use that current page number.  otherwise use the number 1.

		$args = array(
			'post_type' => 'lyrics',
	    'posts_per_page' => 10, /* -1 will SHOW ALL POSTS*/
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

		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			<span class="songtags">

				<?php echo get_the_term_list( $post->ID, 'songs', '<div class="songtagbox">', '</div><div class="songtagbox">', '</div>' );
				// Otherwise just use the_tags() and no need to pass first 2 args.
				// $post btw retrieves the data of the current post in a loop, so it's a standard WP hook
				?>

			</span>

		</h4>

	<?php endwhile; ?>


	<div class="pagination">
		<div class="nav-previous"><?php previous_posts_link( '<< Previous Page' ); ?></div>
		<div class="nav-next"><?php next_posts_link( 'Next Page >>' ); ?></div>

	<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif;
	wp_reset_query();
	?>
	</div>


</div>  <!-- end of "songlist" -->

</div>  <!-- end of "container" -->


<?php get_footer(); ?>
