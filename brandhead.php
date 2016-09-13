<div class="brandhead" id="top">
  <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) );	    ?>"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/25_logo.png"></a></div>

  <div class="brandtext">
    <div class="gingartetitle"><h1><?php bloginfo( 'name' ); ?></h1></div>
    <div class="mestremarisa"><h1><?php the_field('our_fearless_leader',34); ?></h1></div>
    <div class="contents">
  		<?php echo get_bloginfo( 'description', 'display' ); ?>


      <!-- USED TO HAVE THIS SO EACH PAGE'S TAGLINE COULD BE DIFFERENT ... BUT TOO MUCH.
      <?php the_meta(); ?> Use this to return everything. -->
      <!-- This defines the variable $postid to be used in the following function.  <?php $postid = get_the_ID(); ?>	-->
      <!-- <?php echo get_post_meta($postid, 'Tagline', true); ?>  -->


  	</div>
  </div> <!-- / "brandtext"-->
</div> <!-- / "brandhead"-->
