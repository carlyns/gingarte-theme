<?php
/*
WP Post Template: Single Event
Description: Gives you an initial section for the main info and a side image for a poster.
/* if using Plugin "WP Custom Post Template", the first line of code is REQD for post templates to show up as a tab. The template file must be in the main folder too.  */
?>
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
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>

	<div class="initial">
		<div class="description">
			<p><?php the_field('event_overview'); ?></p>
		</div>
		<div class="eventimg">
			<?php
				$image = get_field('event_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
		</div>
	</div>


	<?php the_content(); ?>


	<?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>



	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&amp;layout=standard&amp;show-faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" id="facebook-like"></iframe>
</div>


<?php get_footer(); ?>
