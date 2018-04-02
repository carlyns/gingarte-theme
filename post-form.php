<?php
/*
WP Post Template: Event Form & Payment
Description: Integrated form and payment page.
/* if using Plugin "WP Custom Post Template", the first line of code is REQD for post templates to show up as a tab. The template file must be in the main folder too.  */
?>
<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

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


	<?php the_content(); ?>


	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>



</div>


<?php get_footer(); ?>
