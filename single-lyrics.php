<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>
	<?php include ('brandhead.php'); ?>
	<div class="contents">
		<!-- <?php the_meta(); ?> Use this to return everything. -->
		<?php $postid = get_the_ID(); ?>		<!-- This defines the variable $postid to be used in the following function. -->
		<?php echo get_post_meta($postid, 'Tagline', true); ?>
	</div>

</header>

<?php include ('menu.php'); ?>

<div class="container">
<p>
	Just a test line to see if a single Lyrics post can have it's own custom template ... as long as it's already a Custom Post Type (via Custom Post UI).  Otherwise I have to use a plugin.  Not as easy as custom page templates.  It only works if you put the single-lyrics.php file in the main folder (wherever WP is looking for single.php)
</p>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>


	  <p><?php the_content(); ?></p>
	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>


</div>


<?php get_footer(); ?>
