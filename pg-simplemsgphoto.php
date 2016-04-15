<?php
/* Template Name: Simple Message and Photo */
/* the above line of code is REQD for the templates to show up as a tab!!! */
?>
<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/post.css">-->

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

	<h1><?php the_title(); ?></h1>
	<div class="mainimg">
		<p>
			this must still be coded as a page template!
			why doesn't the img in the wsysig editor display?
		</p>
		<caption>Photo Credit: ?, year?</caption>
	</div>
	<?php the_content(); ?>

</div>




<?php get_footer(); ?>
