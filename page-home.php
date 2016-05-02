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

	 <!-- BE CAREFUL!  SOMETIMES ITS BEST TO DEFINE A VARIABLE AND THEN CALL IT LATER. -->
	<div class="tagline">
		<p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
	</div>
</header>

<?php include ('menu.php'); ?>

	<div class="frontimg">
	<!--HEADER IMAGE GOES HERE, BUT IT'S ACTUALLY A BACKGROUND -->
		<div class="caption">
			<p><?php the_field('home_image_caption'); ?></p>
		</div>
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
				<div class="capostar"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/capostarA.png"></div>
				<h2><?php the_field('first_feature_heading',34); ?></h2>
			</a>
			<p><?php the_field('first_feature',34); ?></p>
		</div>

		<div class="middle">
      <a href="<?php echo get_permalink(26); ?>">

      <div class="capostar"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/capostarB.png"></div>
				<h2><?php the_field('second_feature_heading',34); ?></h2></a>
        <p><?php the_field('second_feature',34); ?></p>
			<div class="featpartners">
        <!-- CAN I GET THE ACF POST ID TO SELECT SPECIFIC CUSTOM POST TYPES AND HAVE THEIR IMAGE FIELDS DISPLAY?? -->
        <div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/driehaus.jpg"></img></div>
        <div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/field.png"></img></div>
        <div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/united.jpg"></img></div>
			</div>
		</div>

		<div class="last">
      <a href="<?php echo get_permalink(36); ?>">
        <div class="capostar"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/capostarS.png"></div>
				<h2><?php the_field('third_feature_heading',34); ?></h2></a>
        <p><?php the_field('third_feature',34); ?></p>
		</div>
	</div> <!-- / "features" -->
</div> <!--/ "container" -->

<?php get_footer(); ?>


</body>
</html>
