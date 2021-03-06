<nav>
<div class="mobilemenu">
	<!-- to highlight current menu item, target the WP-generated class "current-menu-item"-->
	<div class="menu-bar">
		<div class="menu-icon">
			<a href="javascript:;"><i class="fa fa-bars"></i></a>	</div>

		<div class="news-feature">
			<a href="<?php the_field('featured_event',34); ?>"><i class="fa fa-star-o"></i> <?php the_field('featured_event_title',34); ?> <i class="fa fa-star-o"></i></a>
		</div>


		<div class="arrow-icon">
			<a href="#top"><i class="fa fa-angle-double-up"></i></a>
		</div>
	</div>

	<div class="dropdown">
    <?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
	</div>
</div>

	<!-- BIG SCREENS HAVE BIGGER MENU UNTIL SCROLL-->
	<!-- HIDE ON SMALL SCREENS -->
	<div class="menu-full">
		<!-- to highlight current menu item, target the WP-generated class "current-menu-item"-->
      <?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
		<div class="news-feature">
			<a href="<?php the_field('featured_event',34); ?>"><i class="fa fa-star-o"></i> <?php the_field('featured_event_title',34); ?> <i class="fa fa-star-o"></i></a>
		</div>
	</div>

	<!--back-top arrow only shows up on larger screens -->
	<div class="back-top">
		<a href="#top"><i class="fa fa-arrow-circle-up"></i></a>
	</div>
</nav>
