<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title> <!-- always has to be this order.  main title >> page title -->
	<meta name="description" content="Brazilian martial arts classes and performances in Chicago.  Cultivating a community through capoeira for over 20 years.">
	<!--<meta name="description" content="<?php bloginfo('description') ?>"> could use this for Description, but it's exactly the same as the WP Tagline, which I want to be different -->
	<!-- don't print WP version.  -->
	<?php wp_head(); ?> <!-- THIS TAG POINTS WP TO THIS FILE TO PULL THE HEADER WHEN IT'S CALLED IN OTHER FILES.  THAT'S WHY IT NEEDS TO BE IN THIS FILE. ) -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/ico" width="16" height="16">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/gingarte.css">
