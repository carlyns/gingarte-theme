<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>
	<?php include ('brandhead.php'); ?>
</header>

<?php include ('menu.php'); ?>

<div class="container">
	<!-- apparently custom post types don't appear by default on tag archive pages.  css tricks suggest you add the some code to your functions.php https://css-tricks.com/snippets/wordpress/make-archives-php-include-custom-post-types/ -->



		<!------------  CONDITIONAL BREADCRUMBS ------------>
			<!-- EASY FOR TAGS -->
			<?php // if ( is_tag( array( 'corrido', 8, 10 ) ) ) :
				 ?>

			<!-- CAN'T BELIEVE I FIGURED IT OUT FOR CUSTOM TAXONOMY.  found a snippet from: https://css-tricks.com/forums/topic/wordpress-changing-stylesheets-depending-on-custom-taxonomy-terms/-->
			<?php // If they're CORRIDOS, CONTEMP, OR ONE-LINE-COROS, ETC, Display "Go back to All Songs" and then list all links.
			if ( is_tax( 'songs', array('term_name' => 'ladainha', 'corrido', 'contemporanea', 'one-line-coro', 'samba' ) ) ) : ?>

			<p class="breadcrumbs">
				<a href="<?php echo site_url(); ?>/resources/music/songs"><< Back to All Songs</a>
			</p>


			<?php else : // If they're any other kind of post type e.g. news, events, etc, Just display list of all links. ?>
				<!--  LEAVE BLANK -->
			<?php endif; ?>

			<!------------  END CONDITIONAL BREADCRUMBS ------------>






<?php // outer conditional: if songs use one query
	if ( is_tax( 'songs', array('term_name' => 'ladainha', 'corrido', 'contemporanea', 'one-line-coro', 'samba' ) ) ) : ?>
	<p class="archive">
		Your results for the tag/category <span class="keyword"><?php single_tag_title(); ?></span>:
	</p>

	<?php

	// get data for the current query
	$slug = get_query_var( 'term');
	// var_dump( $slug );

	// didn't use these:
	// $queriedobject = get_queried_object();
	// var_dump( $queriedobject );

		// define args for alphetization
		$args = array(
		  'post_type' => 'lyrics', // need this no matter what to get lyrics

			// correct syntax from this!
			'tax_query' => array(
			  array(
			    'taxonomy' => 'songs',
			    'field'    => 'slug',
			    'terms'    => $slug, // manual attempt first with 'corrido' then found this thread for get_query_var(): http://wordpress.stackexchange.com/questions/20431/how-to-get-taxonomy-term-of-the-current-page-and-populate-queries-in-the-templat
			  ),
			),
		  'orderby' => 'title',
		  'order' => 'ASC',
		  );

		$loop = new WP_Query( $args ); //Define the loop based on arguments
		query_posts($args);

		?>
		<!-- the loop -->
		<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>


	  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	  <?php endwhile; else :

			var_dump( $slug );

?>
		<?php endif; wp_reset_query(); ?>


<?php else : // If they're any other kind of post type e.g. news, events, etc, Just display list of all links chronologically. ?>

	<!-- the regular loop -->
	<?php if ( have_posts() ) : ?>
		<p class="archive">
			Your results for the tag/category <span class="keyword"><?php single_tag_title(); ?></span>:
		</p>
		<p>
			<!-- add the Tag Description, if it exists -->
		</p>
	<?php while ( have_posts() ) : the_post(); // DISPLAY POSTS ?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php endwhile; ?>

	<?php else : // if no posts exist ?>
		<p class="archive">
			You were searching for posts labeled with the tag/category <span class="keyword"><?php single_tag_title(); ?></span>:
		</p>
		<p><?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); //_e aka echo
		?></p>
		<!--
			 display "Search for something else:" with a Search Bar.
	 -->
	<?php endif; ?>


<?php endif; // end outer conditional ?>



</div>

<?php get_footer(); ?>
