<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/about.css">

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


<div class="section-collapsed">
	<div class="toggle-brazil">
		<div class="titleicon"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/abt-brasil.png"></div>
	<h1 class="section-title">Brazilian Roots</h1>
	<div><a class="fliparrow" href="javascript:;"><i class="fa fa-chevron-down"></i></a></div>
	</div>
</div>

<div class="brazil">
	<div class="description"><p><?php the_field('brazil_description'); ?></p>	</div>
	<hr>

	<?php the_field('capoeira_description'); ?>

	<div class="dances" id="dances">
		<?php the_field('related'); ?>

		<?php
		//Define your custom post type name in the arguments
		$args = array( 'post_type' => 'dances', 'posts_per_page' => 10 );
		//Define the loop based on arguments
		$loop = new WP_Query( $args );

		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="dance">
		  <h3><?php the_title(); ?></h3>

		  <?php
		      $image = get_field('dance_image');
		      if( !empty($image) ): ?>
		      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		  <?php	the_content(); ?>

		<?php endif;
		echo '</div>';
		endwhile; ?>

		<?php // ONCE A NEW QUERY IS DEFINED, THESE ARE THE POSTS PULLED
		// MUST RESET THE LOOP TO THE MAIN QUERY (LIKE BELOW) TO GET THE BASIC INFO FROM ACF
		// OTHERWISE THE REGULAR ACF FIELDS WON'T APPEAR ?>
	</div>


</div><!-- //end of "brazil"-->




<div class="bluebkgrd">

	<div class="section-collapsed">
		<div class="toggle-group">
		<div class="titleicon"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/abt-berimbau-blue-white.png"></div>
		<h1 class="section-title">Our Group</h1>
		<div><a class="fliparrow" href="javascript:;"><i class="fa fa-chevron-down"></i></a></div>
		</div>
	</div>

	<?php // THIS IS THE ORIGIAL LOOP! JUST HAD TO ADD THIS SNIPPET AND THE ORIG QUERY AND DATA APPEARS IN THIS FOLLOWING SECTION!
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; ?>


	<div class="group">
		<div class="description">
			<p><?php the_field('group_description'); ?></p>
		</div>
		<hr>
			<?php the_field('group_history'); ?>
			<h2>mestre marisa</h2>
				<div class="marisa">
					<?php
						$image = get_field('marisa_photo');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
				<?php the_field('marisa_bio'); ?>

		<h2>instructors</h2>

		<?php //HOW TO DISPLAY CUSTOM POSTS from https://wp-types.com/documentation/user-guides/displaying-wordpress-custom-content/
		$args = array( 'post_type' => 'teacher', 'posts_per_page' => 20 ); //Define your custom post type name in the arguments
		$loop = new WP_Query( $args ); //Define the loop based on arguments

		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="teacher"><a href="<?php the_field('bio_link'); ?>">

		  <?php	echo '<div class="headshot">';
		      $image = get_field('teacher_headshot');
		      if( !empty($image) ): ?>
		        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		      <?php endif;
		    echo '</div>';
		  echo '</a>'; ?>

			<h3><?php the_title(); ?></h3>

		<?php echo '</div>'; 
		endwhile; ?>


	<div class="students">
		<?php the_field('about_students'); ?>
	</div>

	</div><!-- //end of "group"-->
</div> <!-- / #bluebkgrd-->

<div class="section-collapsed">
	<div class="toggle-chicago">
		<div class="titleicon"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/abt-chicago.png"></div>
		<h1 class="section-title">A Home in Chicago</h1>
		<div><a class="fliparrow" href="javascript:;"><i class="fa fa-chevron-down"></i></a></div>
	</div>
</div>

<?php // RESETTING TO ORIG LOOP AGAIN
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>

<div class="chicago">
	<div class="description">
		<p><?php the_field('chicago_description'); ?></p>
	</div>
<hr>
<?php the_field('after_school'); ?>

<div class="partnerlogos">
	<?php //HOW TO DISPLAY CUSTOM POSTS from https://wp-types.com/documentation/user-guides/displaying-wordpress-custom-content/
	$args = array( 'post_type' => 'schools', 'posts_per_page' => 30 ); //Define your custom post type name in the arguments
	$loop = new WP_Query( $args ); //Define the loop based on arguments

	//Display the contents
	while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<?php	echo '<div class="plogo">';
	    $image = get_field('school_logo');
	    if( !empty($image) ): ?>
	      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	    <?php endif;
	  echo '</div>';

	endwhile; ?>

</div>

<?php // RESETTING TO ORIG LOOP AGAIN
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>


<div class="alsopartners">
	<p><?php the_field('other_schools'); ?></p>

</div>




<?php the_field('board_directors'); ?>


<?php the_field('support_group'); ?>

	<h3>We have been generously sponsored throughout the years by countless partners.  These are just a few: </h3>

	<div class="partnerlogos">
		<?php //HOW TO DISPLAY CUSTOM POSTS from https://wp-types.com/documentation/user-guides/displaying-wordpress-custom-content/
		$args = array( 'post_type' => 'partners', 'posts_per_page' => 30 ); //Define your custom post type name in the arguments
		$loop = new WP_Query( $args ); //Define the loop based on arguments

		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<?php	echo '<div class="plogo">';
		    $image = get_field('partner_logo');
		    if( !empty($image) ): ?>
		      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		    <?php endif;
		  echo '</div>';

		endwhile; ?>
	</div>

	<?php // RESETTING TO ORIG LOOP AGAIN
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; ?>



	<div class="alsopartners">
		<p><?php the_field('other_partners'); ?></p>
	</div>

	<div class="button"><a href="mailto:info@gingartecapoeira.org">Please contact us for coporate sponsorships and partnerships.</a></div>



</div><!-- //end of "chicago"-->

	<!-- NOTES:
show students and Community Atmosphere!  Welcoming!  Embracing broader Brazilian community and social good.  The impacts capoeira can have on people / life.
need to develop inclusive atmosphere, events & shows well-executed and demonstrates organization/efficiency, our board of directors, fundraisers-->


<?php get_footer(); ?>
