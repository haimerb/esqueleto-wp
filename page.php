 <?php get_header(); ?>
<div id="sidebar_left" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hidden-xs hidden-sm">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Left') ) : endif; ?>
</div>
 
<div id="content" class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
 
<div id="sidebar_right" class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Right') ) : endif; ?>
</div>
<?php get_footer(); ?>