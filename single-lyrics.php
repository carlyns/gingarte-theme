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
	<p class="breadcrumbs">
		<a href="<?php echo site_url(); ?>/resources/songs"><< Back to Full List of Songs</a>
	</p>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_tags (); ?>

		<h1><?php the_title(); ?></h1>


	  <p><?php the_content(); ?></p>

		<?php edit_post_link ();
		// This is an 'edit' button if a user is logged in using a standard WP function!?>

	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag!
	?>




</div>


<?php get_footer(); ?>
