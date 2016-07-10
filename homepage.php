<?php /* Template Name: Landing */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title()?></h1>
        <h2><?php the_content();?></h2>
    <?php endwhile; ?>
<?php endif; ?>