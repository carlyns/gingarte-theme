<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

	<div class="contents">
  	<!-- This defines the variable $postid to be used in the following function. --><?php $postid = get_the_ID(); ?>
		<?php echo get_post_meta($postid, 'Tagline', true); ?>
	</div>

</header>

<?php include ('menu.php'); ?>




<div class="container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<p><?php the_content(); ?></p>
	<?php endwhile; endif; ?>


		<?php $news_posts_query = "showposts=6&cat=2,3"; $news_posts_query = new WP_Query($news_posts_query); ?>

		<?php if ($news_posts_query->have_posts()) : // this is split up in case i want to add nav at the top too ?>
		<?php while ($news_posts_query->have_posts()) : $news_posts_query->the_post(); ?>



	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_content(); ?></p>
	<?php endwhile; endif; ?>


</div>



<?php get_footer(); ?>
