<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>
	<?php include ('brandhead.php'); ?>
</header>

<?php include ('menu.php'); ?>

<div class="container">

	<!-- ARCHIVE PAGE FOR CUSTOM POST TYPE NEEDS TO BE TOGGLED EITHER MANUALLY (if custom post types were manually created) OR VIA THE CPT UI SETTINGS: "HAS ARCHIVE".-->

	<?php if ( have_posts() ) : ?>
		<p class="archive">
			You're looking for teachers!
		<p>
			<!-- add the Tag Description -->
		</p>

	<?php while ( have_posts() ) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<?php endwhile; else : ?>
		<p class="archive">
			You're looking for teachers!
		</p>
		<p><?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); //_e aka echo
		?></p>

		<!-- NEED CONDITIONAL BREADCRUMBS
			if the above displayed posts are custompost = lyrics,
			then display link "Go back to All Songs"
			else display "Search for something else:" with a Search Bar.
	 -->


	<?php endif; ?>
	<!-- ADD PAGINATION JUST IN CASE??  HOW MANY RESULTS DOES IT DISPLAY? -->

</div>

<?php get_footer(); ?>
