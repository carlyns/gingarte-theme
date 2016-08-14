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
</div> <!-- / "brandtext"-->
</div> <!-- / "brandhead"-->

</header>

<?php include ('menu.php'); ?>

<div class="container">
	<h3>
		Here are all the posts from Gingarte labeled with the tag <h2>"<?php single_tag_title(); ?>"</h2>
	</h3>

	<?php global $query_string;
	query_posts($query_string . '&posts_per_page=-1');?>
	<!-- FROM: https://wordpress.org/support/topic/display-all-posts-by-using-tagphp-->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>

		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<span class="songtags"><?php the_tags( '<div class="songtagbox">', '</div><div class="songtagbox">', '</div>' ); ?></span>
		</h4>

	  <p><?php the_content(); ?></p>
	<?php endwhile; ?>

<?php endif;
wp_reset_query();
?>

</div>


<?php get_footer(); ?>
