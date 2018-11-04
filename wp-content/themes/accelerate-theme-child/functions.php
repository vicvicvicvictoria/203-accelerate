<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

//custom post types function

function create_custom_post_types() {
	//create a Case Studies custom post type
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

  <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>


<?php
$attr = array (
    'width' => '32', //input only number, in pixel
    'height' => '32', //input only number, in pixel
    'margin' => '4', //input only number, in pixel
    'display' => 'horizontal', //horizontal | vertical
    'alignment' => 'center', //center | left | right
    'attr_id' => 'custom_icon_id', //add custom id to <ul> wraper
    'attr_class' => 'custom_icon_class', //add custom class to <ul> wraper
    'selected_icons' => array ( '1', '3', '5', '6' )
    //you can get the icon ID form All Icons page
);
if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );
?>
