<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/music.css">

<title><?php wp_title(); ?> | Gingarte Capoeira Chicago</title>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
<header>

	<?php include ('brandhead.php'); ?>

</header>

<?php include ('menu.php'); ?>

<div class="music">
	<p class="breadcrumbs">
		<a href="<?php echo site_url(); ?>/resources"><< Back to Resources</a>
	</p>
	<h1><?php the_title(); ?></h1>

	<div class="musicimg"></div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h3><?php the_content(); ?></h3>
	<?php endwhile; endif; ?>

	<div class="instruments">
		<h2>Instruments</h2>
		<p><?php the_field('instr_overview'); ?></p>
	</div>

	<div class="grid4">
		<h3>
			<!-- Yes this echoed the title of the ACF!: http://www.advancedcustomfields.com/resources/get_field_object/-->
			<?php
				$field_key = "field_56ec247d144f6";
				$field = get_field_object($field_key);
				echo $field['label'];

				// if it's referenced from a different page:
				// add this: $post_id = 6;
				// and use this: $field = get_field_object($field_key, $post_id);
			?>
		</h3>
		<p><?php the_field('berimbau'); ?></p>
	</div>

	<div class="grid4">
		<h3>
			<?php
				$field_key = "field_56ec24aa144f7";
				$field = get_field_object($field_key);
				echo $field['label'];
			?>
		</h3>
		<p><?php the_field('pandeiro'); ?></p>
	</div>

	<div class="grid4">
		<h3>
			<?php
				$field_key = "field_56ec24b6144f8";
				$field = get_field_object($field_key);
				echo $field['label'];
			?>
		</h3>
		<p><?php the_field('atabaque'); ?></p>
	</div>


	<h2>Songs</h2>
	<p><?php the_field('songs_overview'); ?></p>
		<a href="<?php echo get_permalink(232); ?>"><div class="button">Database of Lyrics</div></a>


</div>



<?php get_footer(); ?>
