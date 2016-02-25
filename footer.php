<footer>





	<div class="mainftrinfo">
		<p>©<?php echo year_shortcode(); ?> Gingarte Capoeira Chicago. </br>All Rights Reserved.</p>

		<?php the_field('our_locations',34); ?>


<!-- FOOTER AREA to add widgets -->
		<?php if ( is_active_sidebar( 'main_footer' ) ) : ?>
		<?php dynamic_sidebar( 'main_footer' ); ?>
		<!-- ADD CLASSES TO REGISTER_SIDEBAR FUNCTION IN FUNCTIONS.PHP TO WRAP DIVS UNIQUELY.  Didn't really try to do this.  Instead of having two different sizes for the icons, I made them a universal 40px wide and fudged the centering on larger screens. -->
		<?php endif; ?>


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
