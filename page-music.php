<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/music.css">

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

<div class="music">

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
	<p>
		Songs are tell history, what's going on in the game, depending on the context.  There are different types of songs for a Capoeira roda include Ladainhas, Quadras, Corridos, and Contemporanea.  Songs for other related cultural dances include Samba, Puxada de Rede, Maculele, and Danca de coco.
	</p>
		<a href="<?php echo get_permalink(232); ?>"><div class="button">Learn more about songs and view their lyrics in our Songs Database!</div></a>


</div>



<?php get_footer(); ?>
