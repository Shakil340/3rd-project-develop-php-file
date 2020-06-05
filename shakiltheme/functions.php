<?php 


function css_js(){
    // css file 
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', '1.0');
    wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css', '1.0');
    wp_enqueue_style('slick-css',get_template_directory_uri().'/css/slick.css', '1.0');
    wp_enqueue_style('slick-theme',get_template_directory_uri().'/css/slick-theme.css', '1.0');
    wp_enqueue_style('fancybox-css',get_template_directory_uri().'/css/jquery.fancybox.min.css', '1.0');
    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.min.css', '1.0');
    wp_enqueue_style('owl-theme',get_template_directory_uri().'/css/owl.theme.default.min.css', '1.0');
    wp_enqueue_style('all-css',get_template_directory_uri().'/css/all.min.css', '1.0');
    wp_enqueue_style('main-style',get_stylesheet_uri());

    // js file
     wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js', array(), '1.0',true);
     wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.5.0.min.js', array(), '1.0',true);
     wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js', array(), '1.0',true);
     wp_enqueue_script('bootstrap-min',get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0',true);
     wp_enqueue_script('owl-carousel-min',get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.0',true);
     wp_enqueue_script('ionicons','https://unpkg.com/ionicons@5.0.0/dist/ionicons.js', array(), '1.0',true);
     wp_enqueue_script('mixitup',get_template_directory_uri().'/js/mixitup.min.js', array(), '1.0',true);
     wp_enqueue_script('fancybox-min',get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), '1.0',true);
     wp_enqueue_script('smooth','https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js', array(), '1.0',true);
     wp_enqueue_script('jquery-min','//code.jquery.com/jquery-1.11.0.min.js', array(), '1.0',true);
     wp_enqueue_script('migrate','//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '1.0',true);
     wp_enqueue_script('slick-min',get_template_directory_uri().'/js/slick.min.js', array(), '1.0',true);
     wp_enqueue_script('wow-min','https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.0',true);
     wp_enqueue_script('scrollspy','https://gitcdn.xyz/repo/thesmart/jquery-scrollspy/0.1.3/scrollspy.js', array(), '1.0',true);
     
}
add_action('wp_enqueue_scripts', 'css_js');

require_once('inc/redux-framework-master/ReduxCore/framework.php');
require_once('inc/redux-framework-master/sample/sample-config.php');





?>