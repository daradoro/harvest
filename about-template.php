<?php /* Template Name: About page */ ?>
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
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/about-template.css" media="screen" />

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?> </title>
		<?php wp_head();?>
	</head>
<body <?php body_class();?> >
<div class="">
  <?php get_header(); ?>
</div>
<div class="pageContainer">
  <div class="row wideAbout rowBanner">
  </div>
<div class="container">
  <div class="row">
         <?php
      if (have_posts()) : 
        while(have_posts()) : the_post(); ?>

          <h2>TITLE</h2>
          <h1><?php echo get_post_field('post_content', 'titleContent'); ?></h1>

      <div>
      <h2 class="baskerVilleItalic"><?php the_content(); ?></h2>
      <?php  endwhile;

        else : 
            echo '<h1>No content Found</h1>';
      endif;
      ?>
      </div>
    </div>
</div>
<div class="container">
  <br>
  <br>
  <hr>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!-- /.container -->
<?php get_footer(); ?>