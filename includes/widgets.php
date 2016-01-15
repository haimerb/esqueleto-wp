register_sidebar(array(
 'name' => 'Sidebar Left',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));
 
register_sidebar(array(
 'name' => 'Sidebar Right',
 'before_widget' => '<div class="widget">',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));

 add_action('widgets_init','header_widgets_init');
 
function header_widgets_init(){
    $args = array(
    'name'          => 'Header Widget Zone',
    'id'            => 'header-widget',
    'description'   => '',
    'before_widget' => '<div class="header-widget col-sm-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}

add_action('widgets_init','footer1_widgets_init');
 
function footer1_widgets_init(){
    $args = array(
    'name'          => 'Footer Widget Zone 1',
    'id'            => 'footer-widget1',
    'description'   => '',
    'before_widget' => '<div class="footer-widget col-sm-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}
 
add_action('widgets_init','footer2_widgets_init');
 
function footer2_widgets_init(){
    $args = array(
    'name'          => 'Footer Widget Zone 2',
    'id'            => 'footer-widget2',
    'description'   => '',
    'before_widget' => '<div class="footer-widget col-sm-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}
 
add_action('widgets_init','footer3_widgets_init');
 
function footer3_widgets_init(){
    $args = array(
    'name'          => 'Footer Widget Zone 3',
    'id'            => 'footer-widget3',
    'description'   => '',
    'before_widget' => '<div class="footer-widget col-sm-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}
 
add_action('widgets_init','footer4_widgets_init');
 
function footer4_widgets_init(){
    $args = array(
    'name'          => 'Footer Widget Zone 4',
    'id'            => 'footer-widget4',
    'description'   => '',
    'before_widget' => '<div class="footer-widget col-sm-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}

add_action('widgets_init','home_widgets_init');
 
function home_widgets_init(){
    $args = array(
    'name'          => 'Homepage Widget Zone',
    'id'            => 'home-widget',
    'description'   => '',
    'before_widget' => '<div class="col-sm-12">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}  