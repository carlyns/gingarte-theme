<?php get_header(); ?>

<!-- ADD THE STYLESHEET THAT MIGHT CHANGE BETWEEN PAGES HERE.-->


<!-- GOOGLE ANALYTICS TRACKING.  TRACKING NUMBER STARTS WITH UA.

HOWEVER, WORDPRESS HAS ITS OWN ANALYTICS FOR TRACKING POSTS.  SHOULD BE JUST AS GOOD AS GOOGLE ANALYTICS?  SEE WHAT HAPPENS IF I INCLUDE THIS SCRIPT ON INDEX AT LEAST?  WP BUSINESS PLAN CAN ADD MORE GOOGLE ANALYTICS FEATURES.

-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72902531-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- GOOGLE ANALYTICS TRACKING: PHP ALTERNATIVE!  via https://analytics.google.com/analytics/web/?authuser=1#management/Settings/a72902531w110694745p115471852/%3Fm.page%3DTrackingCode%26_r.ghFlowId%3D6324039/

Use the code above to create a file named "analyticstracking.php", and include the file on each PHP template page.
Add the following line to each template page immediately after the opening <body> tag:
<?php include_once("analyticstracking.php") ?>

This is good for blog posts that you want to track, like scheduled events or blog entries.  Good for Gingarte and RESUSblog.  But then again, these are both Wordpress sites, which has its own Analytics.

RESUS doesn't have php yet, so have to add the code manually.
-->




	<title>Gingarte Capoeira Chicago</title>
</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

	<div class="contents">
		<?php echo get_bloginfo( 'description', 'display' ); ?>
	</div>
</div> <!-- / "brandtext"-->
</div> <!-- / "brandhead"-->

</header>

<?php include ('menu.php'); ?>

	<div class="frontimg">
	<!--HEADER IMAGE GOES HERE, BUT IT'S ACTUALLY A BACKGROUND -->

  <!-- THE CAPTION WAS JUST A SELFISH FEATURE
		<div class="caption">
			<p><?php the_field('home_image_caption'); ?></p>
		</div>
  -->

	</div>


<div class="container">
	<div class="news">
  <div class="items">

  <?php $category_id = get_cat_ID( 'fans' );
  ?>
  <?php $category_link = get_category_link( $category_id );
  ?>
  <!-- ADD THIS A TAG IF A LINK TO THE CATEGORY ARCHIVE IS NECESSARY:
<a href="<?php echo esc_url( $category_link ); ?>">  -->

    <h2><span class="smallnewstext">news for </span></br>Fans</h2>

    <!-- This loop needs to be added if the page isn't the index.php page.  Otherwise the loop will return the content of the Home Page, not show the actual blog posts -->
    <!-- ALSO THE SOURCE OF THIS CODE IS SUPER COOL BECAUSE ADDING &CAT=3 ALLOWS ME TO ONLY DISPLAY A CERTAIN CATEGORY.  THAT WAS COMPLETE LUCK IT WAS IN THE SAME THREAD.  WOW.
  	https://wordpress.org/support/topic/blog-posts-on-static-front-page
  	-->
    <?php $fan_posts_query = "showposts=6&cat=3"; $fan_posts_query = new WP_Query($fan_posts_query); ?>

    <?php if ($fan_posts_query->have_posts()) : while ($fan_posts_query->have_posts()) : $fan_posts_query->the_post(); ?>

    <ul>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    </ul>
    <?php endwhile; endif; // MAKE SURE THIS IS OUTSIDE THE ENTRY DIV ?>
    <ul><a href="<?php get_page_template(); ?>/gingarte/news">(See All the Latest News)</a></ul>
  </div>

	<div class="items">
	   <h2><span class="smallnewstext">news for </span></br>Students</h3>

      <?php $mainposts_query = "showposts=6&cat=2"; $mainposts_query = new WP_Query($mainposts_query); ?>
      <?php if ($mainposts_query->have_posts()) : while ($mainposts_query->have_posts()) : $mainposts_query->the_post(); ?>
        <ul>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        </ul>
      <?php endwhile; endif; // MAKE SURE THIS IS OUTSIDE THE ENTRY DIV ?>
      <ul><a href="<?php get_page_template(); ?>/gingarte/news">(See All the Latest News)</a></ul>
	</div>
	</div><!-- //end of "news"-->


  <div class="fvideo">
    <?php the_field('featured_video',34); ?>
	</div>

	<div class="features">
		<div class="first">
      <a href="<?php echo get_permalink(26); ?>">
				<div class="capostar">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 480" enable-background="new 0 0 490 480" xml:space="preserve">
          <g id="photos" display="none">

          		<image display="inline" overflow="visible" width="490" height="480" xlink:href="embuia.jpg"  transform="matrix(1.1571 0 0 1.1571 -38.5225 -94.1094)">
          	</image>

          		<image display="inline" overflow="visible" width="125" height="125" xlink:href="biriba1.jpg"  transform="matrix(3.84 0 0 3.84 474 -9.9531)">
          	</image>

          		<image display="inline" overflow="visible" width="485" height="480" xlink:href="bamba.jpg"  transform="matrix(1.068 0 0 1.068 -13.999 434.791)">
          	</image>
          </g>
          <g id="icons">
          	<g>
          		<g>
          			<path fill=rgba(224,27,60,1) d="M238.6,183.6l37,15.6l19.7-39.9c0,0,2.9-5.1,8.7-6s24.3,0,24.3,0l60.2,12.7l-2.9,10.1l-0.6,7.6v15.6h20.2
          				h16.2c0,0-12.7,15-15.6,16.2c-2.9,1.2-13.9-1.7-16.2,0c-2.3,1.7-6.9,2.9-10.4,0.3c-3.5-2.6-9.8-11.9-14.5-11.9
          				c-4.6,0-11-4.6-11-4.6l-8.1-1.7l-6.4-3.7H330l-6.9-3.2l-5.2-5.5c0,0-4,28.8-6.9,32.2c-2.9,3.4,5.2,31.7-12.1,42.7
          				c-17.4,11-37,22.6-37,22.6s-39.3,11-44,11.6s-2.9,5.2-2.9,5.2l9.8,8.7l3.5,9.8l-2.3,5.2l6.9,16.2l-4.6,56.7l1.7,2.9l5.8,2.9
          				h-21.1h-5.2h-6.7h-6.4c0,0,10.4-5.8,15.6-5.8s6.9-24.9,6.9-24.9v-30.7l-6.9-11h-7.5c0,0-15.6-34.1-17.4-34.1
          				c-1.7,0-3.5-11-3.5-13.9c0-2.9,7.5-17.9,6.9-21.4c-0.6-3.5-4.6-6.9-6.9-6.9s-8.1-1.2-8.1-1.2l-4,9.8c0,0-8.1,4-9.3,6.4
          				c-1.2,2.3-16.7,9.2-16.7,9.2l-7.6,11.6l-2.9-1.7v2.9h-6.4l-4.9,5.2l3.8-9.8l-3.8,1.5l-9,3.7v-6.4l5.8-3.5l-5.8-3.5h6.4l-6.4-5.7
          				l9-2.9v-2.9l-9,0.6l5.2-5.2l-5.2-1.7l9-1.7l-9-5.2v-2.9l9,1.7V245l-5.5-5.8l8.1,2.3l4.6-2.9v-10.4l9.3,13.9c0,0,5.8,3.5,8.7,3.5
          				c2.9,0,6.4-4,6.4-4l-6.9-7.2c0,0,0-1.5,2.9-5.5c2.9-4,3.5-7.5,6.9-8.7c3.5-1.2,11-2.3,11-2.3l9.3-4.6c0,0,8.1,0.6,11.6,1.7
          				c3.5,1.2,9.3,5.2,9.3,5.2l4.6,2.3v5.8l5.5,6.1c0,0,10.1-7.8,13.6-7.3c3.5,0.6,13.9,1.7,15.6,2.3s10.4-0.6,10.4-0.6l-4-4
          				l-12.7-6.4c0,0-41.1-21.4-42.2-24.6c-1.2-3.2-38.5-25.2-44.4-27.8s-33.1-13.1-33.1-13.1s11.6-26.5,14.5-26.5
          				c2.9,0-11.6-5.8-14.5-5.8c-2.9,0-11-1.2-13.3,0c-2.3,1.2-14.5,5.8-13.9,3.5s4.6-4.6,6.4-6.9c1.7-2.3,2.9-5.2,5.8-6.4
          				c2.9-1.2,14.5-5.2,18.5-7.5c4.1-2.3,7.8-5.2,7.8-5.2s5.2-2.6,6.9,0c1.7,2.6,2.3,7.8,2.9,9s6.4,9.8,6.4,9.8l17.4,13l20.5,15.3
          				l31.5,20.8L238.6,183.6z"/>
          			<path fill=rgba(224,27,60,1) d="M308.8,245.8l8.4-4.3c0,0-1.5-6.7,0-7.2s7.7,0,7.7,0l5.4,5.6c0,0,1.9,5.5,1.9,5.9s-3.9,3.5-3.9,3.5
          				l-11.2,2.6l-18.3,8.1L308.8,245.8z"/>
          		</g>
          		<g>
          			<path fill="none" stroke=rgba(224,27,60,1) stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M151.1,216.1
          				c0,0,7.6,2.2,14.9,0c7.3-2.2,28.7-2.2,34.9-2s24.5-4.2,24.5-4.2"/>
          			<path fill="none" stroke=rgba(224,27,60,1) stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M225.4,231.6
          				c0,0-3.9-10.1,11-14.5"/>
          		</g>
          	</g>
          	<path fill="none" stroke=rgba(224,27,60,1) stroke-miterlimit="10" d="M160.7,217.1"/>
          </g>
          </svg>
        </div>
				<h2><?php the_field('first_feature_heading',34); ?></h2>
			  <p><?php the_field('first_feature',34); ?></p>
			</a>
		</div>

		<div class="middle">
      <a href="<?php echo get_permalink(26); ?>">

      <div class="capostar">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 480 480" enable-background="new 0 0 480 480" xml:space="preserve">
        <g id="photos" display="none">

        		<image display="inline" overflow="visible" width="490" height="480" xlink:href="embuia.jpg"  transform="matrix(1.1571 0 0 1.1571 -528.5225 -94.1094)">
        	</image>

        		<image display="inline" overflow="visible" width="125" height="125" xlink:href="biriba1.jpg"  transform="matrix(3.84 0 0 3.84 -16 -9.9531)">
        	</image>

        		<image display="inline" overflow="visible" width="484" height="480" xlink:href="urso.jpg"  transform="matrix(1 0 0 1 13.4492 480)">
        	</image>

        		<image display="inline" overflow="visible" width="485" height="480" xlink:href="bamba.jpg"  transform="matrix(1.068 0 0 1.068 -503.999 434.791)">
        	</image>
        </g>
        <g id="icons">
        	<g>
        		<g>
        			<path fill=rgba(224,27,60,1) d="M96.8,119.8l9.7-13.4c0,0,33.5-20.8,37.9-18.6s9.7,12.6,9.7,12.6l4.5,10.4c0,0,40.2,29,43.9,35
        				s39.4,41.7,39.4,41.7l17.9,11.9c0,0,35-6.7,40.2-6.7s32-6.7,37.2-0.7s39.4,38.1,39.4,38.1l4.5,31.1c0,0,8.9,2.2,11.2,3.7
        				s23.1,0.7,22.3,6s-14.1,10.4-16.4,11.2s-17.9,6-20.8,6.7s-15.6-3.7-14.1-11.2s-13.4-25.3-13.4-27.5s-23.1-24.5-23.1-28.3
        				s-4.5-7.4-8.2-6.7s-37.2,13.8-37.9,15.1s-12.6,10.2-17.9,13.2s-25.3,10.4-27.5,14.9s-15.6,19.5-17.9,30.6s-4.5,44.5-4.5,44.5
        				s19.4,20.8,11.2,30.5s-12.7,32.7-12.7,32.7l-9.7,26l-3,11.9l-9.7,3h-17.9h-12.6l-3.7-12.6l-1.5-40.9c0,0-1.5-15.6,4.5-29
        				s11.9-27.5,11.9-27.5s-12.6-46.1,5.2-69.9s37.2-38.7,36.4-46.9s-39.4-51.3-39.4-55s-35-19.3-35-19.3l8.9-15.6l-9.7-2.2
        				c0,0-9.7-1.5-14.1,0.7s-24.5,12.6-25.3,8.9S96.8,119.8,96.8,119.8z"/>
        			<path fill=rgba(242,242,242,1) d="M177.1,363c0,0,3,3,6.7,5.2s11.2,8.2,13.4,8.9s0,11.9,0,11.9s-4.5,23.1-3.7,27.5s-5.8,7.4-5.8,7.4h-19.5
        				c0,0,4.5-29.8,3-39.4s0.7-21.6,0.7-21.6H177.1z"/>
        		</g>
        		<g>
        			<path fill="none" stroke=rgba(224,27,60,1) stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" d="M301.5,322.4
        				c0,0-38-36.3-40.6-44s-21.6-38-26.8-38.9"/>
        			<polyline fill="none" stroke=rgba(224,27,60,1) stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" points="288.9,318.4
        				267.8,290.6 262.3,280.9 			"/>
        		</g>
        	</g>
        </g>
        </svg>
      </div>
				<h2><?php the_field('second_feature_heading',34); ?></h2>
        <p><?php the_field('second_feature',34); ?></p>
			<div class="featpartners">
        <!-- CAN I GET THE ACF POST ID TO SELECT SPECIFIC CUSTOM POST TYPES AND HAVE THEIR IMAGE FIELDS DISPLAY?? -->
        <div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/driehaus.jpg"></img></div>
        <div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/field.png"></img></div>
        <div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/united.jpg"></img></div>
			</div>
      </a>
    </div>

		<div class="last">
      <a href="<?php echo get_permalink(36); ?>">
        <div class="capostar">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 490.3" enable-background="new 0 0 490 490.3" xml:space="preserve">
          <g id="photos" display="none">

          		<image display="inline" overflow="visible" width="485" height="480" xlink:href="bamba.jpg"  transform="matrix(1.068 0 0 1.068 -13.999 -46.4414)">
          	</image>
          </g>
          <g id="icons">
          	<g>
          		<path fill=rgba(224,27,60,1) d="M314.2,73.2c0,0,8.3-9.9,12-9.9s5.1,3.7,5.3,4.9c0.3,1.2,0,11.3,0,11.3l0.1,4.3v5.6l-1.7,5.3l-0.3,3.2
          			l-3.5,1.6l0.3,2.7h3.2l-0.3,25.1l-1.6,45.9c0,0-9.9,53.4-11.5,55.8c-1.6,2.4-5.6,12.8-6.7,13.6s1.6,8.3,0,9.9
          			c-1.6,1.6-4.8,1.3-4.8,1.3S292.3,274,292,275c-0.3,1.1-2.9,4.3-2.9,4.3l3.5,7.2l-5.3,5.6c0,0-2.1,2.4-4.5,2.9
          			c-2.4,0.5-22.4,12.8-23.5,13.9c-1.1,1.1-14.2,12.8-14.2,12.8v3.7l-1.6,1.6c0,0,2.9,12.5,3.5,18.2c0.5,5.6-0.3,29.1-1.9,34.4
          			c-1.6,5.3-17.4,44.6-17.4,44.6l-24,1.9V424l-3.5,2.1l-9.6-1.3c0,0,7.7-5.1,11.7-5.3c4-0.3,18.2,0,19.5-2.1
          			c1.3-2.1,4.8-20.6,4.8-20.6s0.3-26.4,3.7-29.4c3.5-2.9,1.1-24,1.1-24s-8-14.7-7.5-23.5c0.5-8.8-4.3-7.5-4.3-7.5l-5.3-0.8l-2.7,7.2
          			l-4.8,1.3l-4.3,2.7l0.5,3.5l0.5,7.2l-1.6-5.9l-4.8,4.5l-1.9-4l3.5-3.5v-4.5l-5.1,2.4l-3.2-2.7l1.9-5.3l-3.2-0.3l-1.3-2.9l-3.2,0.5
          			l-2.4-1.9l-2.9-1.3v-3.2l-5.9-1.6v-1.3v-3.7v-6.4l-1.9-1.6v-4.5l4.5-1.6l3.7-5.3l1.3-4l2.9-1.3l2.4-1.9l3.5-0.3l2.7,1.6l3.2,1.6
          			l1.3,1.6l5.9-0.3l4.3,1.9l0.5-4c0,0-4.3-9.9-4.8-17.9c-0.5-8-1.3-16.3-1.3-16.3s-19.5,1.3-23.5,2.7c-4,1.3-19.2,6.9-19.2,6.9
          			s-5.3-1.1-6.1-9.6c-0.8-8.5,0-11.7,0-11.7s-7.2,8.3-7.7,10.1c-0.5,1.9-5.1,14.7-11.5,10.4c-6.4-4.3-7.7-18.2-7.7-18.2s7.5-20,8-23
          			c0.5-2.9,2.9-19.8,10.4-18.4c7.5,1.3,9.3,4.3,9.3,4.3l6.1,5.1l3.2-1.1h5.3l6.4-0.8l4,1.9l35.8,0.8l27,1.3c0,0,35,1.9,42.2,5.6
          			c7.2,3.7,8.8-16,8.8-16s1.3-12.8,3.2-15.8c1.9-2.9,6.1-12.5,6.1-12.5s2.1-19.2,2.7-21.9c0.5-2.7,3.5-18.2,2.7-21.9
          			c-0.8-3.7,3.2-10.1,3.2-10.1s-6.9-5.3-4.8-10.1c2.1-4.8,7.2-10.9,6.7-14.2C311.8,80.7,314.2,73.2,314.2,73.2z"/>
          		<path fill=rgba(242,242,242,1) d="M216.7,237.4c0,0,10.4,2.1,14.4,2.1c4,0,10.9,0,10.9,0s-1.9,2.7,0,3.7c1.9,1.1,1.3,4.5,1.3,4.5
          			s-12,5.6-18.2,3.7S216.7,237.4,216.7,237.4z"/>
          		<polyline fill="none" stroke=rgba(224,27,60,1) stroke-width="3" stroke-linecap="round" stroke-miterlimit="10" points="298.4,282.8
          			290.4,268.4 294.4,265.4 301.6,278.5 		"/>
          	</g>
          </g>
          </svg>
        </div>
				<h2><?php the_field('third_feature_heading',34); ?></h2>
        <p><?php the_field('third_feature',34); ?></p>
      </a>
		</div>
	</div> <!-- / "features" -->
</div> <!--/ "container" -->

<?php get_footer(); ?>


</body>
</html>
