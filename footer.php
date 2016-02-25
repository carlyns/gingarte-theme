<footer>

	<?php

	if ( is_active_sidebar( 'main_footer' ) ) : ?>
	<div>
		<?php dynamic_sidebar( 'main_footer' ); ?>
	</div><!-- FOOTER AREA to add widgets -->

	<!-- ADD CLASSES TO REGISTER_SIDEBAR FUNCTION IN FUNCTIONS.PHP TO WRAP DIVS UNIQUELY.-->
<?php endif; ?>



	<div class="mainftrinfo">
		<p>©<?php echo year_shortcode(); ?> Gingarte Capoeira Chicago. </br>All Rights Reserved.</p>

		<p>Chicagoland: </br>West Town | Hyde Park | Lincoln Square | Crystal Lake</p>

		<p>Also find us in:
			</br>HAWAII | VERMONT</p>

		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/social/facebook.png">
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/social/youtube.png">
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/social/flickr.png">
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/social/twitter.png">
		<img src="<?php bloginfo( 'template_url' ); ?>/imgs/social/rss.png">

		<p><a href="mailto:info@gingartecapoeira.org" target="_blank">info@gingartecapoeira.org</a>
		</br>312.768.8507</p>
		</br>
		<div class="smallerftr">
			<a href="http://eepurl.com/ezyEU" target="_blank">CLICK HERE TO SIGN UP FOR OUR MAILING LIST</a>
		</div>
	</div> <!-- end of "mainftrinfo" -->

	<div class="largerftr">
		<h4>Brazil's national sport!</br></br><a href="https://translate.google.com/#pt/en/Capoeira" target="_blank">Capoeira</a> is a martial art that combines self-defense, dance, music, acrobatics, Brazilian culture, and lots of great energy.</h4>

		<h4>Make a tax-deductible donation to our 501c3 and <a href="#" target="_blank">help Gingarte continue transforming communities</a> through Capoeira.</h4>

		<h4><a href="http://eepurl.com/ezyEU" target="_blank">Click here to sign up for our mailing list.</a></h4>
		<h4>Get an email for every new performace or class update we post.  </h4>
		<h4>Receive our summary newsletter 4-5 times a year.  </h4>


	</div>


	<div class="author">
		<p>this website was lovingly (originally) hand-coded by <a href="http://www.resusstudio.com">iuna</a> and then built for content management through WP.</p>
	</div>
</footer>
<?php wp_footer(); ?>

<!-- FOR SCRIPTS, PATH NEEDS TO USE PHP template_url, NOT JUST RELATIVE URL -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/gingarte.js"></script>

</body>
</html>
