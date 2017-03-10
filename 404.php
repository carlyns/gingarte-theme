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

	<h2>Oops!  Looks like you've reached a page that doesn't exist.</h2>
	<div class="mainimg">
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/oops-pie.jpg" alt="page not found">
		<!-- caption>Photo Credit: Unknown </caption-->
	</div>
	<h2>Don't worry.  Try searching:</h2>
	<?php get_search_form(); ?>

</div>




<?php get_footer(); ?>
