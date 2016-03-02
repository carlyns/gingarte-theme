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


		<div class="dance">
			<?php
				$image = get_field('maculele_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			<?php the_field('maculele'); ?>
		</div>

		<div class="dance">
			<?php
				$image = get_field('guerreira_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>			<?php the_field('guerreira'); ?>
		</div>
		<div class="dance">
			<?php
				$image = get_field('samba_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>			<?php the_field('samba'); ?>
		</div>
		<div class="dance">
			<?php
				$image = get_field('puxada_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>			<?php the_field('puxada'); ?>
		</div>
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
						<?php endif; ?>				</div>
				<?php the_field('marisa_bio'); ?>

		<h2>instructors</h2>

		<?php //HOW TO DISPLAY CUSTOM POSTS from https://wp-types.com/documentation/user-guides/displaying-wordpress-custom-content/
		$args = array( 'post_type' => 'teachers', 'posts_per_page' => 20 ); //Define your custom post type name in the arguments
		$loop = new WP_Query( $args ); //Define the loop based on arguments

		//Display the contents
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="teacher"><a href="<?php the_field('bio_link'); ?>">
			<h3><?php the_title(); ?></h3>
			<!-- UNCOMMENT FOR DESKTOP? OR JUST DELETE <?php	the_content(); ?> -->

			<?php	echo '<div class="headshot">';
					$image = get_field('teacher_headshot');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif;
				echo '</div>';
			echo '</a>';
		echo '</div>';
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




<div class="chicago">
	<div class="description"><p>
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

<div class="alsopartners">
	<p>Also: Reavis Elementary, Cameron Elementary, Castellanos Elementary, Mark Sheridan Academy, Evanston?, Libraries?, UIC Jazz Camp
	</p>
</div>

<?php the_field('board_directors'); ?>


<?php the_field('support_group'); ?>
	<div class="button">Donate to our 501c3</div>

	<p>We have been generously sponsored throughout the years by countless partners.  These are just a few: </p>

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




	<div class="alsopartners">
		<p>Also: University of Chicago RSO, Chicago Samba School, Evanston Samba School, Swing Brasileiro, Ruth Page Center for the Arts, Union Church?, Easter Seals?,
		</p>
	</div>

	<div class="button">Please contact us on for coporate sponsorships and partnerships.</div>



</div><!-- //end of "chicago"-->

	<!-- NOTES:
show students and Community Atmosphere!  Welcoming!  Embracing broader Brazilian community and social good.  The impacts capoeira can have on people / life.
need to develop inclusive atmosphere, events & shows well-executed and demonstrates organization/efficiency, our board of directors, fundraisers-->




<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&amp;layout=standard&amp;show-faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" id="facebook-like"></iframe>

<?php get_footer(); ?>
