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

	<h2>We're working so hard to finish this page!</h2>
	<div class="mainimg">
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/workinghard.jpg" alt="kickathon photo">
		<caption>Photo Credit: Oscar Delgadillo, 2015</caption>
	</div>
	<h2>Please check back soon.</h2>

</div>




<?php get_footer(); ?>
