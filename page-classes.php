<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/classes.css">

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


<div class="classes">
	<div class="main">
		<div class="allcapoclasses">
				<div class="locations">
					<h1>Schedule & Locations</h1>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>

					<!-- INSERTED TABBY PLUGIN TO DISPLAY CLASS INFO BY LOCATION -->

				</div> <!-- / "locations" -->


				<div class="payment">
					<h1>class payment options</h1>
						<div class="notes">
						<p>* Kids are 17 years of age or under.
						</br>** Pricing is subject to change, especially during special events/workshops.</p>
						</div>

						<?php
						$args = array( 'post_type' => 'pricing', 'posts_per_page' => 10 ); //Define your custom post type name in the arguments
						$loop = new WP_Query( $args ); //Define the loop based on arguments
						//Display the contents
						while ( $loop->have_posts() ) : $loop->the_post(); ?>


							<div class="grid4">
								<div class="option">
									<h5><?php the_title(); ?></h5>
									<div class="option"><?php the_content(); ?></div>
								</div>


								<div class="paypal">
									<a href="<?php the_field('paypal_link_1'); ?>" target="_blank"><div class="button"><?php the_field('type_of_purchase_1'); ?></div></a>

									<a href="<?php the_field('paypal_link_2'); ?>" target="_blank"><div class="button"><?php the_field('type_of_purchase_2'); ?></div></a>
								</div>

							</div>
						<?php 	endwhile; ?>

				</div> <!-- / "payment" -->


				<div class="special">
					<div class="everyone">
						<h1><span class="smallnewstext">Is Capoeira Really </span></br>For Everyone?</h1>
					</div>

						<div class="stacked">

							<a href="<?php get_page_template(); ?>/gingarte/kids"><h3>For Kids</h3>
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forkids.jpg" alt="kids classes"></a>
							<p>Children ages 3 and above are welcome to our classes.  </p>
							<p>We partner with some local schools too - <a href="<?php get_page_template(); ?>/gingarte/about">see our About page</a> to find out which ones!	</p>

							<a href="<?php get_page_template(); ?>/gingarte/classes/beginners"><h3>For Beginners</h3>
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forbeginners.jpg" alt="beginners classes"></a>
							<p>No matter what your background, movements can be tailored by teachers to fit anyone's ability.  </p>

							<a href="<?php get_page_template(); ?>/gingarte/comingsoon"><h3>For Stressed Students</h3>
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forstudents.jpg" alt="great for students"></a>
							<p>Use capoeira to clear your mind.  Take a break before cramming for that next final!  </p>
							<p>We offer discounts to UofC students (with an ID).</p>

							<a href="<?php get_page_template(); ?>/gingarte/private"><h3>Private Lessons</h3>
								<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forprivate.jpg" alt="private lessons"></a>
							<p>Our teachers can personalize training for you.  We can work with your schedule. </p>
						</div>
				</div> <!-- // end of "special" -->
			</div> <!-- / "allcapoclasses" -->
		</div> <!-- / "main" -->

	<div class="quote"><blockquote>
		<p>"Capoeira é por todo mundo"</p>
		<!-- <p>we can't wait to train with you!</p>
		<p>(classes only a few times a week means more people at training!)</p>-->

	</blockquote></div>



	<div class="otherclass">
		<h1>cultural enrichment classes</h1>

		<div class="description">
			<p>Immersing yourself in the culture surrounding Capoeira is an essential part of learning Capoeira itself!  </p>
			<p>	In the past, we've offered classes/workshops covering these other aspects of Brazilian culture including samba, orixa history, percussion, and/or the Portuguese language.
			</p>
			<p>	We will post class offerings like this here - often with guest teachers - so check back for announcements!  Meanwhile, you can learn more about related music and dances on our Resources page.
			</p>
		</div> <!-- // end of "description" -->

		<div class="dancelist">
			<div class="classthumbnail">
				<div class="classtitle"><a href="#">Samba</a></div>
			</div>

			<div class="classthumbnail">
				<div class="classtitle"><a href="#">Orixa Dances/Toques</a></div>
			</div>

			<div class="classthumbnail">
				<div class="classtitle"><a href="#">Percussion</a></div>
			</div>

			<div class="classthumbnail">
				<div class="classtitle"><a href="#">Portuguese language</a></div>
			</div>
		</div> <!-- // end of "dancelist" -->

	</div> <!-- // end of "otherclass" -->
</div> <!-- // end of "classes" -->


<?php get_footer(); ?>
