<footer>

	<div class="mainftrinfo">
		<p>©<?php echo year_shortcode(); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Gingarte Capoeira Chicago</a></br>All Rights Reserved.</p>

		<?php the_field('our_locations',34); ?>


		<div class="social">

			<!-- too bad this widget area didn't workout.  sfsi plugin stopped working - page never loaded ADD CLASSES TO REGISTER_SIDEBAR FUNCTION IN FUNCTIONS.PHP TO WRAP DIVS UNIQUELY-->
			<?php // if ( is_active_sidebar( 'main_footer' ) ) : ?>
			<?php // dynamic_sidebar( 'main_footer' ); ?>

			<!-- Instead of having two different sizes for the icons, I made them a universal 40px wide and fudged the centering on larger screens. -->

			<?php // first social icon
				$image = get_field( 'social1' , 34 );
				$sociallink = get_field( 'social1_link' , 34 );
				$title = $image['title'];

				if( !empty($image) ): ?>

					<a href="<?php echo $sociallink ?>">
						<img class="socialicon" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
			<?php endif; ?>

			<?php // second social icon
				$image = get_field( 'social2' , 34 );
				$sociallink = get_field( 'social2_link' , 34 );
				$title = $image['title'];

				if( !empty($image) ): ?>

					<a href="<?php echo $sociallink ?>">
						<img class="socialicon" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
			<?php endif; ?>

			<?php // third social icon
				$image = get_field( 'social3' , 34 );
				$sociallink = get_field( 'social3_link' , 34 );
				$title = $image['title'];

				if( !empty($image) ): ?>

					<a href="<?php echo $sociallink ?>">
						<img class="socialicon" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
			<?php endif; ?>

			<?php // fourth social icon
				$image = get_field( 'social4' , 34 );
				$sociallink = get_field( 'social4_link' , 34 );
				$title = $image['title'];

				if( !empty($image) ): ?>

					<a href="<?php echo $sociallink ?>">
						<img class="socialicon" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
			<?php endif; ?>

			<?php // fifth social icon
				$image = get_field( 'social5' , 34 );
				$sociallink = get_field( 'social5_link' , 34 );
				$title = $image['title'];

				if( !empty($image) ): ?>

					<a href="<?php echo $sociallink ?>">
						<img class="socialicon" src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" />
					</a>
			<?php endif; ?>

		</div>


		<?php the_field('contact_info',34); ?>
		</br>
		<div class="smallerftr">
			<div class="buttonelist">
				<?php the_field('newsletter_signup',34); ?>
			</div>
		</div>
	</div> <!-- end of "mainftrinfo" -->

	<div class="largerftr">
		<?php the_field('more_info',34); ?>

		<div class="buttonelist">
			<?php the_field('newsletter_signup',34); ?>
		</div>

	</div>


	<div class="author">
		<?php the_field('footer_credits',34); ?>
	</div>
</footer>
<?php wp_footer(); ?>

<!-- FOR SCRIPTS, PATH NEEDS TO USE PHP template_url, NOT JUST RELATIVE URL -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/gingarte.js"></script>

</body>
</html>
