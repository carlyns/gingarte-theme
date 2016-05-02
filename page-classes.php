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
</div>


<div class="main">
	<div class="allcapoclasses">
		<div class="locations">
			<h1>Schedule & Locations</h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<!-- INSERTED TABBY PLUGIN TO DISPLAY CLASS INFO BY LOCATION -->





<!-- PREVIOUS CUSTOM DROP-DOWN FOR CLASS LOCATIONS
			<?php
			$args = array( 'post_type' => 'locations', 'posts_per_page' => 10 ); //Define your custom post type name in the arguments
			$loop = new WP_Query( $args ); //Define the loop based on arguments
			//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post(); ?>


				<div class="grid3">
-- HOW TO CHANGE THE JAVASCRIPT #ID'S??!? IN THE LOOP.  CUSTOM FIELD??  --
					<div class="neighborhood" id="wt"><?php the_title(); ?><span class="extra">, <?php the_field('region'); ?></span><br><i class="fa fa-chevron-down"></i></div>

					<div class="info" id="wt-info">
						<?php the_content(); ?>
					</div>
				</div>
			<?php 	endwhile; ?>



				<div class="grid3">
					<div class="neighborhood" id="hp">Hyde Park<span class="extra">, Chicago</span><br><i class="fa fa-chevron-down"></i></div>
					<div class="info" id="hp-info">

						<p>University of Chicago campus</br>
						Ida Noyes Hall</br>1212 East 59th Street<span class="important"> (please check building for exact room)</span></p>
						<p class="important">Winter Quarter classes run from until March 17</p>
						-- HOW TO FORMAT THIS???
						Classes are MOST Tuesdays and Thursdays but please check detailed schedule:

						Tuesday, 1/5 7p-9p @ Ida Noyes Hall Cloister Club
						Tuesday, 1/12 7p-9p @ Ida Noyes Hall Library/Lounge
						Thursday, 1/14 NO CLASS
						Tuesday, 1/19 7p-9p @ Ida Noyes Hall Library/Lounge
						Thursday, 1/21 7p-9p @ Ida Noyes Hall 3rd flr Theater
						Tuesday, 1/26 6p-8p @ Ida Noyes Hall 3rd flr Theater
						Thursday, 1/28 7p-9p @ Ida Noyes Hall 3rd flr Theater
						Tuesday, 2/2 7:30p-9:30p @ Ida Noyes Hall Cloister Club
						Thursday, 2/4 NO CLASS
						Tuesday, 2/9 6p-8p @ Ida Noyes Hall 3rd flr Theater
						Thursday, 2/11 NO CLASS
						Tuesday, 2/16 7p-9p @ Ida Noyes Hall Library/Lounge
						Thursday, 2/18 NO CLASS
						Tuesday, 2/23 7p-9p @ Ida Noyes Hall Library/Lounge
						Thursday, 2/25 NO CLASS
						Tuesday, 3/1 7p-9p @ Ida Noyes Hall Cloister Club
						Thursday, 3/3 7p-9p @ Ida Noyes Hall 3rd flr Theater
						Tuesday, 3/8 NO CLASS
						Thursday, 3/10 7p-9p @ Ida Noyes Hall 3rd flr Theater
						Tuesday, 3/15 7p-9p @ Ida Noyes Hall Library/Lounge
						Thursday, 3/17 7p-9p @ Ida Noyes Hall 3rd flr Theater
						--

						<p class="fineprint">Gingarte class cards ARE honored here.
						Groupons are NOT accepted here. </p>
					</div>
				</div>


				<div class="grid3">
					<div class="neighborhood" id="ls">Lincoln Square<span class="extra">, Chicago</span><br><i class="fa fa-chevron-down"></i></div>
					<div class="info" id="ls-info">
						<p>Old Town School of Folk Music</br>4454 N. Lincoln Av. Chicago, 60625</p>
						<p><span class="days">Sundays</span>,10am-12pm???</p>
						<p class="important">Must sign up through <a href="https://www.oldtownschool.org/classes/adults/dance/">Old Town</a>. </p>
						<p class="fineprint">Gingarte class cards are NOT honored here.
						Groupons are NOT accepted here. </p>
					</div>





				</div>


				<div class="grid3">
					<div class="neighborhood" id="cl">Crystal Lake<span class="extra">, Illinois</span><br><i class="fa fa-chevron-down"></i></div>
					<div class="info" id="cl-info">
						<p>Please contact Instrutor Artista at artista@hotmail.com or 847-xxx-xxxx. </p>
						<p class="fineprint">Gingarte class cards are NOT honored here.
						Groupons are NOT accepted here.</p>
					</div>


				</div>
-->

		</div> <!-- / "locations" -->




		<div class="payment">
			<h1>class payment options</h1>
				<div class="notes">
				<p>Please note:</p>
				<p>Kids are 17 years of age or under.
				</br>Pricing is subject to change, especially during special events/workshops.</p>
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

						<div class="button">Purchase</div>
						<!-- HOW TO MAKE EACH BUTTON URL DIFFERENT?  CUSTOM FIELD??   -->

					</div>
				<?php 	endwhile; ?>


			<div class="grid4">
			<div class="option">
				<h5>10-class Punch Card:</h5>
				<p class="price">$110 for adults</br>$65 for kids</p>
			</div>
				<ul>
					<li>occasional student</li>
					<li>class about once a week</li>
					<li>expires after 3 months</li>
				</ul>
				<div class="button">Purchase</div>
			</div>

			<div class="grid4">
			<div class="option">
				<h5>Monthly Unlimited:</h5>
				<p class="price">$100 for adults</br>$50 for kids</p>
			</div>
				<ul>
					<li>frequent student</li>
					<li>class twice or more a week</li>
					<li>due at the beginning of the month</li>
				</ul>
				<div class="button">Purchase</div>
			</div>
		</div> <!-- / "payment" -->
	</div>
</div>


		<div class="special">
			<div class="everyone">
				<h1><span class="smallnewstext">Is Capoeira Really </span></br>For Everyone?</h1>
			</div>

				<div class="stacked">

					<a href="kids.html"><h3>for kids</h3>
						<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forkids.jpg" alt="kids classes"></a>
					<p>Children ages 3 and above are welcome to our classes.  </p>
					<p>We partner with some local schools too - click here to find out which ones!	</p>

					<a href="beginners.html"><h3>for beginners</h3>
						<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forbeginners.jpg" alt="beginners classes"></a>
					<p>No matter what your background, movements can be tailored by teachers to fit anyone's ability.  </p>

					<a href="students.html"><h3>for stressed students</h3>
						<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forstudents.jpg" alt="great for students"></a>
					<p>Use capoeira to clear your mind.  Take a break before cramming for that next final!  </p>
					<p>We offer discounts to UofC students (with an ID).</p>

					<a href="private.html"><h3>private lessons</h3>
						<img src="<?php bloginfo( 'template_url' ); ?>/imgs/forprivate.jpg" alt="private lessons"></a>
					<p>Our teachers can personalize training for you.  We can work with your schedule. </p>
				</div>
		</div> <!-- // end of "special" -->
	</div> <!-- // end of "allcapoclasses" -->

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
			<div class="classtitle">Samba</div>
		</div>

		<div class="classthumbnail">
			<div class="classtitle">Orixa Dances/Toques</div>
		</div>

		<div class="classthumbnail">
			<div class="classtitle">Percussion</div>
		</div>

		<div class="classthumbnail">
			<div class="classtitle">Portuguese language</div>
		</div>
	</div> <!-- // end of "dancelist" -->

</div> <!-- // end of "otherclass" -->




<?php get_footer(); ?>
