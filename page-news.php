<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
<header>

	<?php include ('brandhead.php'); ?>

</header>

<?php include ('menu.php'); ?>




<div class="container">

	<?php // NEWS IS NOT A CATEGORY!  IT'S JUST A PAGE RIGHT NOW.  NEWZ IS THE ACTUAL CUSTOM TAXONOMY.
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php endwhile; endif; ?>


	<?php
	// $currentPage = get_query_var('paged'); select the 'paged' variable.  initially empty and set at zero.  need to replace it with at least 1.

	$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1; //steamlined if statement asking if 'paged' is already an integer, then use that current page number.  otherwise use the number 1.

	$args = array( // SETUP ARGS HERE TO PASS THRU NEW QUERY
    'posts_per_page' => 12,
		'paged' => $currentPage, // returns posts on specific page, so need to pass current page as a dynamic value.  this is why $currentPage is defined above.
		// "Querying by taxonomy" section was helpful for clear syntax: https://codex.wordpress.org/Taxonomies
		'tax_query' => array( // tax_query is a WP hook
			array( // needs an array within an array apparently?
				'taxonomy' => 'newz', // taxonomy = name
				'field' => 'id', // specifying to use the ID so this is standard
				// could also use 'slug' and use labels for the terms array
				'terms' => array( // yet another array for the labels
					'20', '21' )
			)
		)
  );
	?>

	<?php
	$newsPosts = new WP_Query($args); // yessss, inserting $args worked!
	query_posts($args); // still need this for pagination to show up ... but not suppost to use queryposts because it is the main loop!
	?>

	<?php if ($newsPosts->have_posts()) : while ($newsPosts->have_posts()) : $newsPosts->the_post();
	// WHY NOT IN CHRONOLOGICAL ORDER??
	?>


		<div class="latest-news-item">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p>(Originally published <?php echo get_the_date(); ?>)</p> <!-- the_date ONLY SHOWS FIRST POST WITH SAME DATES-->
		</div>


	<?php endwhile; ?>

	<div class="pagination">
		<div class="nav-previous"><?php next_posts_link( '<< Older posts' ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts >>' ); ?></div>


	<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif;
	wp_reset_query();
	?>
	</div>


</div>



<?php get_footer(); ?>
