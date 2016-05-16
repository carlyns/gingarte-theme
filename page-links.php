<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/links.css">

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
	<?php the_content(); ?>
	<?php endwhile; endif; ?>

	<?php
	$args = array( 'post_type' => 'links', 'posts_per_page' => 100 ); //Define your custom post type name in the arguments
	$loop = new WP_Query( $args ); //Define the loop based on arguments
	//Display the contents
	while ( $loop->have_posts() ) : $loop->the_post(); ?>



<?php endwhile; ?>


</div>



<?php get_footer(); ?>
