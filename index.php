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
<div class="">
  <?php get_header(); ?>
</div>
<div class="pageContainer">
  <?php 
        
        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        if(strpos($url, 'journal-post')){

        }else{

           if (strpos($url,'journal')) {
              include("includes/journal-banner.php"); 
            } 

        }
       
 


  ?>

<div class="container">
  <div class="row">
       <?php 
            
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if(strpos($url, 'journal-post')){

            }else{

               if (strpos($url,'journal')) {
                  $args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'title' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
                      setup_postdata( $post ); ?>
                      <a href="<?php echo get_permalink(); ?>"> 
                        <div>
                          <?php the_date(); ?>
                          <br />
                          <?php the_title(); ?>   
                          <?php the_excerpt(); ?>
                        </div>
                      </a>
                    <?php
                    endforeach; 
                    wp_reset_postdata(); 
                } 

            }
           
     


  ?>
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