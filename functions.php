<?php

add_theme_support('menus');

function register_theme_menus(){
    register_nav_menus(
        array(
            'primary-menu' => _( 'Primary Menu')
        )
    );
}

add_action( 'init', 'register_theme_menus');

function wpm_theme_styles() {

    wp_enqueue_style( 'copper_eot', get_template_directory_uri() . '/css/font/path/copperplate_gothic_light.eot' );

    wp_enqueue_style( 'copper_eot_ie', get_template_directory_uri() . '/css/font/path/copperplate_gothic_light.eot?#iefix' );

    wp_enqueue_style( 'copper_svg', get_template_directory_uri() . '/css/font/path/copperplate_gothic_light.svg#Copperplate Gothic Light' );

    wp_enqueue_style( 'copper_woff', get_template_directory_uri() . '/css/font/path/copperplate_gothic_light.woff' );

    wp_enqueue_style( 'copper_ttf', get_template_directory_uri() . '/css/font/path/copperplate_gothic_light.ttf' );

    wp_enqueue_style( 'parisian_eot', get_template_directory_uri() . '/css/font/path/Parisian.eot' );

    wp_enqueue_style( 'parisian_iefix', get_template_directory_uri() . '/css/font/path/Parisian.eot?#iefix' );

    wp_enqueue_style( 'parisian_woff2', get_template_directory_uri() . '/css/font/path/Parisian.woff2' );

    wp_enqueue_style( 'parisian_woff', get_template_directory_uri() . '/css/font/path/Parisian.woff' );

    wp_enqueue_style( 'parisian_ttf', get_template_directory_uri() . '/css/font/path/Parisian.ttf' );

    wp_enqueue_style( 'parisian_svg', get_template_directory_uri() . '/css/font/path/Parisian.svg#parisian_icgregular' );

    wp_enqueue_style( 'socials_font', get_template_directory_uri() . '/css/font/socials/css/pe-icon-social.css' );
    wp_enqueue_style( 'socials_helper', get_template_directory_uri() . '/css/font/socials/css/helper.css' );
    wp_enqueue_style( 'socials_styler', get_template_directory_uri() . '/css/font/socials/css/social-style.css' );
    wp_enqueue_style( 'icons_font', get_template_directory_uri() . '/css/font/icons/css/pe-icon-7-filled.css' );

    wp_enqueue_style( 'marmelade_google', 'http://fonts.googleapis.com/css?family=Marmelad' );

    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css');

    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'wp_css', get_template_directory_uri() . '/css/wp-styles.css');


}

add_action( 'wp_enqueue_scripts', 'wpm_theme_styles');

function wpm_theme_js() {

    wp_enqueue_script( 'jquery_js', 'http://code.jquery.com/jquery-1.11.2.min.js', '', '', true);

    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', '', '', false);

    wp_enqueue_script( 'plugins_js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '', true);

    wp_enqueue_script( 'mobile_js', get_template_directory_uri() . '/js/mobile.js', array('jquery'), '', true);

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery', 'plugins_js'), '', true);
}

add_action( 'wp_enqueue_scripts', 'wpm_theme_js');