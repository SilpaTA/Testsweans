<?php 

class customhooks{

    function __construct(){

        add_action( 'wp_enqueue_scripts', array($this, 'themes_styles' ) );
        add_action( 'wp_enqueue_scripts',  array($this,'themes_js' ) );
    }
    // Style enqueue

    public function themes_styles() {
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css' );
        wp_enqueue_style( 'all_style', get_stylesheet_directory_uri() . '/assets/css/all.css' );
        wp_enqueue_style( 'slick_style', get_stylesheet_directory_uri() . '/assets/css/slick.css' );
        wp_enqueue_style( 'slick_theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css' );
        wp_enqueue_style( 'fancybox_css1', get_stylesheet_directory_uri() . '/assets/css/fancybox.min.css' );
        wp_enqueue_style( 'aos_css', get_stylesheet_directory_uri() . '/assets/css/aos.css' );
        wp_enqueue_style( 'style_css0', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    }
    

    //  Script Enqueue  

    public function themes_js() {
    	wp_enqueue_script( 'jquery_js', get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.0.min.js', '', '', true );
    	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', '', '', true );
    	wp_enqueue_script( 'easing', get_stylesheet_directory_uri() . '/assets/js/jquery.easing.js', '', '', true );
        wp_enqueue_script( 'fancy_box', get_stylesheet_directory_uri() . '/assets/js/fancybox.min.js', '', '', true );
        wp_enqueue_script( 'scrolling_nav_js', get_stylesheet_directory_uri() . '/assets/js/scrolling-nav.js', '', '', true );
        wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/assets/js/custom.js', '', '', true );
        wp_enqueue_script( 'slick1', get_stylesheet_directory_uri() . '/assets/js/slick.js', '', '', true );
        wp_enqueue_script( 'aos_js', get_stylesheet_directory_uri() . '/assets/js/aos.js', '', '', true );
    }
}
$custonhooks = new customhooks;

	
?>