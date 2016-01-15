<?php get_header(); ?>
<?php if (!dynamic_sidebar('home')) {} ?>
<div id="sidebar_left" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hidden-xs hidden-sm">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Left') ) : endif; ?>
</div>
<div id="content" class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
    <div class="home col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Your Home</h1>
    </div>
</div>
<div id="sidebar_right" class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Right') ) : endif; ?>
</div>
<?php get_footer(); ?>