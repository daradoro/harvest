<?php /* Template Name: About page */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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
<div class="container baskerVille">
  <div class="row">
         <?php
      if (have_posts()) : 
        while(have_posts()) : the_post(); ?>

          <h2><?php the_field('first_header'); ?></h2>
          <h1><?php the_field('second_header'); ?></h1>
          <section>
            <article>
              <div class=" aboutCopyContainer container">
                <div class="container">
                    <img src="<?php the_field('first_image'); ?>">
                    <h3><?php the_content(); ?></h3>
                </div>
              </div>
            </article>
          </section>
      <div>
      <!-- <h2 class="baskerVilleItalic"><?php the_content(); ?></h2> -->
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
  <div class="col-lg-6 toJournal">
  </div>
  <div class="col-lg-6 baskerVilleItalic subscribeWidget">
  <h1>We invite you to join our monthly Harvest Pillows Newsletter</h1>
  <hr>
  <h2>Get a first look at exclusive offers, new products, tips for living well, sleeping better, plus much more
  </h2>
  <button class="btn">Subscribe</button>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<script type="text/javascript">
  $(document).ready(function(){

    



  });
  </script>
<!-- /.container -->
<?php get_footer(); ?>
