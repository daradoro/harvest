<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
		<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?> </title>
		<?php wp_head();?>
	</head>
<body <?php body_class();?> >
<div class="pageContainer">
  <div class="row wide rowBanner">
      <div class="containerBanner container">
        <div class="logoLanding"></div>
        <hr class="underLogo">
        <h2>the bulkwheat hull pillow company</h2>
        <br>
        <br>
        <br>
        <br>
        <button class="btn bannerCTA">SHOP OUR COLLECTION</button>
      </div>
  </div>
<div class="container">
  <div class="row">
    <div class="text-center col-sm-12 chevy">
      <i class="fa fa-angle-down"></i>
    </div>
  </div>
  <div class="row">
    <div>
      <h1 id="tagLine">Initiating pillow talk to sleep better, and live well</h1>
      <br>
      <br>
      <br>
    </div>
      <div class="col-md-4">
        <div class="learnMore"></div>
      </div>
      <div class="col-md-4">
        <div class="ourStory"></div>
      </div>
      <div class="col-md-4">
        <div class="ourJournal"></div>
      </div>
    </div>
</div>
<!-- /.container -->
<?php get_footer(); ?>