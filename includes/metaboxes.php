<?php
function ts_post_type_slider() {
    register_post_type( 'slider',
                array( 
                'label' => __('Slider', 'mytheme'), 
                'public' => true, 
                'show_ui' => true,
                'show_in_nav_menus' => true,
                'rewrite' => true,
                'hierarchical' => true,
                'menu_position' => 5,
                'exclude_from_search' =>true,
                'supports' => array(
                                     'title',
                                     'editor',
                                     'thumbnail',
                                     'excerpt',
                                     'revisions')
                    ) 
                );
    register_taxonomy('category_slider', __('slider', 'mytheme'),array('hierarchical' => true, 'label' =>  __('Slider Categories', 'mytheme'), 'slidercat' => __('Category', 'mytheme'))
    );
}
add_action('init', 'ts_post_type_slider');
?>  
 

