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
	<p>Here are your search results:</p>
	<ul>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			</li>
	</ul>


<?php endwhile; else : ?>
	<p>Sorry, no search results were found. </p>

<?php endif; ?>


</div>


<?php get_footer(); ?>
