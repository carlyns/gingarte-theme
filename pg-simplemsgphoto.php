<?php
/* Template Name: Simple Message and Photo */
/* the above line of code is REQD for the templates to show up as a tab!!! */
?>
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>

	<div class="mainimg">
		<?php
			$image = get_field('horzimage');
			if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
	</div>
	<p><?php the_field('caption'); ?></p>
	<?php the_field('message'); ?>

	<?php endwhile; endif; ?>

</div>




<?php get_footer(); ?>
