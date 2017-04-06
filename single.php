<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
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

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>


	  <p><?php the_content(); ?>

		<!--	<?php wp_list_categories (); ?>
			But these are all categories that exist.  Not the ones of this specific blog post.  -->

			<?php edit_post_link ();
			// This is an 'edit' button if a user is logged in using a standard WP function!?>

</p>


	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>


</div>


<?php get_footer(); ?>
