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
	<div class="breadcrumbs">
		<a href="<?php get_page_template(); ?>/gingarte/about"><< Back to "About" page (needs an anchor)</a>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>


  <p><?php the_content(); ?></p>
	<?php endwhile; endif; ?>


</div>


<?php get_footer(); ?>
