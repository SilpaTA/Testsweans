<?php

class customfunction{

    function __construct(){

        add_action( 'init', array($this, 'wpb_custom_new_menu' ) );
        add_action( 'after_setup_theme' , array($this, 'setup' ) );
        add_filter( 'nav_menu_link_attributes', array($this, 'menuclass' ), 100, 1 );
        add_action( 'widgets_init', array($this, 'footer_widgets_init' ) );
    }
    
    // Menu Register Code
   
    public function wpb_custom_new_menu() {
        register_nav_menus(
            array(
                'main-menu' => __( 'Main Menu' ),
                'footer-menu-one' => __( 'Footer Menu One' ),
                'footer-menu-two' => __( 'Footer Menu Two' ),
                'footer-menu-three' => __( 'Footer Menu Three' ),

            )
        );
    }
    

    //Featured Image
    
    public function setup() {
        // ...
         
        add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme
        add_image_size( 'header', 600, 200, true ); // header image
        add_image_size( 'home-gallery', 450, 269 ); // 400 pixel wide and 200 pixel tall, resized proportionally
        add_image_size( 'custom-size2', 400, 200, true ); // 400 pixel wide and 200 pixel tall, cropped
        add_image_size( 'media-thumb', 350, 267, true  ); // Media page post thumbnails
        add_image_size( 'media-gal-thumb', 180, 120, true  ); // Media page gallery thumbnails
        add_image_size( 'media-full-img', 1110, 343, true  ); //Media single page featured image.
    }

    // Menu class
    
    public function menuclass($atts){
        $atts['class'] = "nav-link js-scroll-trigger";
        return $atts;
    }

    public function footer_widgets_init() {
        register_sidebar(
        array(
            'name'          => __( 'Footer Logo', 'twentynineteen' ),
            'id'            => 'footer-logo-section',
            'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
            'before_widget' => ' <div class="ft-lgo">',
            'after_widget'  => '</div>',
        )
        );
        register_sidebar(
        array(
            'name'          => __( 'Footer Section Two', 'twentynineteen' ),
            'id'            => 'footer-two-section',
            'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
            'before_widget' => ' <div class="ft-one">',
            'after_widget'  => '</div>',
        )
        );
        register_sidebar(
        array(
            'name'          => __( 'Footer Section Three', 'twentynineteen' ),
            'id'            => 'footer-three-section',
            'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
            'before_widget' => ' <div class="ft-one">',
            'after_widget'  => '</div>',
        )
        );
        register_sidebar(
        array(
            'name'          => __( 'Footer Section Four', 'twentynineteen' ),
            'id'            => 'footer-four-section',
            'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
            'before_widget' => ' <div class="ft-one">',
            'after_widget'  => '</div>',
        )
        );
        
    }


}
$customfunc = new customfunction;

?>