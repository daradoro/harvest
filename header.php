<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
		<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/header.css" media="screen" />

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?> </title>
		<?php wp_head();?>
	</head>
<body <?php body_class();?>>

<!--site-header -->
<header class="site-header harvestHead">
	<!-- <h1><?php //bloginfo('name'); ?></h1>
	<h5><?php //bloginfo('description'); ?></h5> -->
	<div class="navbar navbar desktopTransparent">
    <div class="container widthNav">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="pillowsBanner">
      
    </div>
    </div>
    <div class="collapse navbar-collapse navRight">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">OUR STORY</a></li>
        <li><a href="#about">OUR PILLOWS</a></li>
        <li><a href="#">THE SHOP</a></li>
        <li><a href="#">JOURNAL</a></li>
        <li><a href="#about">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</div>

</header>