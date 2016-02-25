<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>
	<?php include ('brandhead.php'); ?>
	<div class="contents">
		<p>All the News</p>
	</div>

</header>

<?php include ('menu.php'); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
	  <p><?php the_content(); ?></p>
	<?php endwhile; endif;  ?>

</div>

<?php get_footer(); ?>
