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


<!-- ALL OLD, INDEX.PHP SINCE WE'REUSING PAGE-HOME.PHP INSTEAD

<title>Gingarte Capoeira Chicago</title>
</head>

<body>
<header>

	<?php include ('brandhead.php'); ?>

	<div class="tagline">
		<p><?php echo get_bloginfo( 'description', 'display' ); ?></p>
	</div>
</header>

<?php include ('menu.php'); ?>

	<div class="frontimg">
		<div class="caption">
			<p>Mestre Marisa brought Capoeira to Chicago in 1991.</p>
		</div>
	</div>


<div class="container">

	<div class="news">

  <div class="items">
    <h2><span class="smallnewstext">news for </span></br>Fans</h2>
    <ul>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

      <?php endwhile; endif; // THIS PLACEMENT MATTERS: in between the ul tag! ?>
    </ul>
  </div>

	<div class="items">
		<h2><span class="smallnewstext">news for </span></br>Students</h3>
			<ul>
				<?php wp_list_categories('orderby=name&title_li=&feed=RSS&style=list');
						?>
			</ul>
	</div>

	</div>


  <div class="fvideo">
		<iframe src="https://player.vimeo.com/video/51081777?title=0&byline=0&portrait=0" width=100% height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>

	<div class="features">
		<div class="first">
			<a href="perform.html">
				<div class="capostar"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/capostarA.png"></div>
				<h2>book us to perform</h2>
			</a>
			<p>Our performance troupe is known throughout the Midwest. It features Capoeira and other related Brazilian cultural dances and can be customized for your needs.  We also offer more casual interactive workshops.  Let us bring a thrilling showcase of Brazil to your event!  </p>
		</div>

		<div class="middle">
			<a href="#"><div class="capostar"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/capostarB.png"></div>
				<h2>support our nonprofit</h2></a>
			<p>Special Thanks to our Generous Parnters:</p>
			<div class="featpartners">
				<div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/afire.png"></img></div>
				<div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/dhs.png"></img></div>
				<div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/icirr.png"></img></div>
				<div class="partner"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/partners/newaminit.png"></img></div>
			</div>
		</div>

		<div class="last">
			<a href="#"><div class="capostar"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/capostarS.png"></div>
				<h2>Beginner Student?</h2></a>
			<p>All of our classes are mixed-level.  Our teachers can tailor movements for all abilities.  We've found students improve faster when surrounded by more advanced students.  We have sessions too.  <a href="classes.html">Read more about the classes we offer</a>. </p>
		</div>
	</div>
</div>
-->
<?php get_footer(); ?>


</body>
</html>
