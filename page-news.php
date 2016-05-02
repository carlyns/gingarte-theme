<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

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

<<<<<<< HEAD
	<?php // default info for News Page
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php endwhile; endif; ?>


	<?php
	// $currentPage = get_query_var('paged'); select the 'paged' variable.  initially empty and set at zero.  need to replace it with at least 1.

	$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1; //steamlined if statement asking if 'paged' is already an integer, then use that current page number.  otherwise use the number 1.

	$args = array(
    'posts_per_page' => 6, // not having this breaks it, even though it doesn't override
		'cat' => '2,3', // finally this string works
		'paged' => $currentPage, // returns posts on specific page, so need to pass current page as a dynamic value.  this is why $currentPage is defined above.
    );
	?>

	<?php
	$newsPosts = new WP_Query($args); // yessss, inserting $args worked!
	query_posts($args); // still need this for pagination to show up ... but not suppost to use queryposts because it is the main loop!
	?>

	<?php if ($newsPosts->have_posts()) : while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>


		<div class="latest-news-item">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p>(First published <?php the_date(); ?>)</p>
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
