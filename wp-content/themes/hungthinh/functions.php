<?php
/**
 * Created by PhpStorm.
 * User: LINH NGUYEN
 * Date: 11/8/2016
 * Time: 9:47 PM
 */

//<script src="styles/website/js/jquery.min.js" type="text/javascript"></script>
//<script src="styles/website/js/bootstrap.min.js" type="text/javascript"></script>
//<script src="styles/website/js/dropdowns-enhancement.js" type="text/javascript"></script>
//<script defer src="styles/website/js/jquery.flexslider.js" type="text/javascript"></script>
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_action('wp_enqueue_scripts', 'bds_register_style');
function bds_register_style()
{
    
    $cssUrl = get_template_directory_uri() . '/css/';
    wp_register_style('bds_theme_bootstrap', $cssUrl . 'bootstrap.min.css', array(), '3.3');
    wp_enqueue_style('bds_theme_bootstrap');
    wp_register_style('bds_theme_style', $cssUrl . 'style.css', array(), '1.0');
    wp_enqueue_style('bds_theme_style');
}

add_action('wp_enqueue_scripts', 'bds_register_scripts');
function bds_register_scripts()
{
    $jsUrl = get_template_directory_uri() . '/js/';

    wp_register_script('bds_theme_jquery_js', $jsUrl . 'jquery.min.js', array(), '1.11.1');
    wp_enqueue_script('bds_theme_jquery_js');

    wp_register_script('bds_theme_bootstrap_js', $jsUrl . 'bootstrap.min.js', array(), '3.3.1');
    wp_enqueue_script('bds_theme_bootstrap_js');

    wp_register_script('bds_theme_dropdowns_enhancement_js', $jsUrl . 'dropdowns-enhancement.js', array(), '1.0');
    wp_enqueue_script('bds_theme_dropdowns_enhancement_js');
}
register_nav_menus(
    array(
        'main-nav' => 'Menu chính',
        'footer-nav' => 'Footer menu'
    )
);
function getMainmenu(){
    wp_nav_menu( array(
        'theme_location' => 'main-nav', // tên location cần hiển thị
        'container' => 'div', // thẻ container của menu
        'container_class' => 'navmenu', //class của container
        'menu_class' => 'menu clearfix' // class của menu bên trong
    ) );
}