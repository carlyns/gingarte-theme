<?php
/* Template Name: List of Posts */
/* the above line of code is REQD for the templates to show up as a tab!!! */
?>
<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->

</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

</header>

<?php include ('menu.php'); ?>




<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>

	<?php
	$args = array( 'post_type' => 'lyrics', 'posts_per_page' => 100, 'orderby'=> 'title', 'order' => 'ASC' ); //Define your custom post type name in the arguments
	// added 'orderby' and 'order' to alphabetize.
	$loop = new WP_Query( $args ); //Define the loop based on arguments
	//Display the contents
	while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<!-- FIGURE OUT HOW TO LIST IN CUSTOM ORDER-->
	<!-- TAG SONG TYPES??-->

<?php endwhile; ?>


</div>



<?php get_footer(); ?>
