<?php

//for adding css and js
 function css_js_scripts() {
     //stylesheet
    
     wp_enqueue_style('main_file',get_stylesheet_uri());

     wp_enqueue_style('bootstrap_file',get_template_directory_uri().'/css/bootstrap.css');

     wp_enqueue_style('style_file',get_template_directory_uri().'/css/style.css');

     wp_enqueue_style('fonts_file','//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700');

     wp_enqueue_style('fonts_file','//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800');

     
     
     //javascript

     wp_enqueue_script('jQuery_file',get_template_directory_uri().'/js/jquery-1.11.1.min.js');

     wp_enqueue_script('Move_top_file',get_template_directory_uri().'/js/move-top.js');

     wp_enqueue_script('easing_file',get_template_directory_uri().'/js/easing.js');

     wp_enqueue_script('bootstrap_js_file',get_template_directory_uri().'/js/bootstrap.js');
 }

 //action

 add_action("wp_enqueue_scripts","css_js_scripts");
//for adding css and js


//for adding menu 

function register_new_menu() {
    //menu register code
    register_nav_menus (
        array(
            'primary-menu' => __('primary-menu'),
            'footer-menu'=>__('footer-menu')
        )
        );
}
//attach code
add_action("init","register_new_menu");
//for adding menu




//for customizing logo 




function custom_logo_setup() {
    $defaults = array(
        'height' =>50,
        'width' =>177
    );

    add_theme_support('custom-logo', $defaults);
}

add_action("after_setup_theme","custom_logo_setup");


//for customizing logo
?>