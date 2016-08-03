<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/resources.css">

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

<div class="trainbetter">
	<h1>main resources</h1>

		<div class="grid4">
			<a href="<?php get_page_template(); ?>/gingarte/resources/cordao-system"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/resource-cords-anneliese.png" alt="cords">
				<h2>cordão system</h2></a>
		 </div>

		<div class="grid4">
			<a href="<?php get_page_template(); ?>/gingarte/resources/music"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/resource-berimbench-oscarD.jpg" alt="capoeira music">
				<h2>capoeira music: instruments & songs</h2></a>
			<!-- as a capoeira group, we regularly practice samba, orixa dance and music.  this is included in this section. -->
		 </div>

		<div class="grid4">
			<a href="<?php get_page_template(); ?>/gingarte/comingsoon"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/resource-maculele5.jpg" alt="maculele">
			<h2>related dances and music</h2></a>
			<!-- as a capoeira group, we regularly orixa and samba have been ingrained in capoeira from its origins.  this section also covers maculele, danca, frevo, coco, etc.  links to same page as from "About" -->
		 </div>
	</div> <!-- // end of "trainbetter" -->

	<!-- <div class="quote">
		<blockquote>The best capoeirista doesn't have the strongest kick or the fastest flip ... but is the most well-rounded.  </blockquote>
	</div> -->


	<!-- HOW TO SECTION?

<div class="howto">
	<h1>how to's:</h1>

	<?php $category_id = get_cat_ID( 'how-to' );
	?>
	<?php $category_link = get_category_link( $category_id );
	?>

	<?php $howto_posts_query = "showposts=6&cat=5"; $howto_posts_query = new WP_Query($howto_posts_query);
	// find category id # under Posts > Categories, in the url
	?>

	<?php if ($howto_posts_query->have_posts()) : while ($howto_posts_query->have_posts()) : $howto_posts_query->the_post(); ?>


	<div class="grid6">
		<i class="fa fa-cog"><span class="resource"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></i>
	</div>

<?php endwhile; endif;  ?>
</div>
	-->



<!-- FAVS & TRENDS SECTION?

<div class="favs">
	<h1>favorites and trends</h1>
	<?php $category_id = get_cat_ID( 'favorites' );
	?>
	<?php $category_link = get_category_link( $category_id );
	?>

	<?php $favs_posts_query = "showposts=6&cat=6"; $favs_posts_query = new WP_Query($favs_posts_query);
	// find category id # under Posts > Categories, in the url
	?>

	<?php if ($favs_posts_query->have_posts()) : while ($favs_posts_query->have_posts()) : $favs_posts_query->the_post(); ?>

	<div class="grid6">
		<i class="fa fa-heart"><span class="resource"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></i>
	</div>

<?php endwhile; endif;  ?>
</div>
-->

<?php get_footer(); ?>
