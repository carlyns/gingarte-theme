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
	<p>
		You were on the search for posts labeled with the tag/category <span>"<?php single_tag_title(); ?>"</span>
	</p>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php endwhile; else : ?>
		<p><?php _e( "Unfortunately, no posts matched your criteria.  But don't give up just yet!" ); ?></p>

	<?php endif; ?>


</div>

<?php get_footer(); ?>
