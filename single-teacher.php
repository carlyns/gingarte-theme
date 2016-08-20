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
	<div class="breadcrumbs">
		<a href="<?php get_page_template(); ?>/gingarte/about"><< Back to "About" page (needs an anchor)</a>
		<!-- THIS LINK NEEDS TO INCLUDE SOME JS THAT ON CLICK, IT TOGGLES THE .GROUP PROPERTY "DISPLAY" TO BLOCK (FROM NONE).  THEN I CAN PROBABLY ADD AN ID ANCHOR.  -->
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>


  <p><?php the_content(); ?></p>
	<?php endwhile; endif; ?>


</div>


<?php get_footer(); ?>
