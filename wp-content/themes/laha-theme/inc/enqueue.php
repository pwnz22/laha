<?php

/*
 * =================
 * ADMIN ENQUEUE FUNCTIONS
 * =================
 */

function laha_load_admin_scripts($hook)
{
    if ('toplevel_page_laha_theme' != $hook) {
        return;
    }

    wp_register_style('laha_admin', get_template_directory_uri() . '/css/laha.admin.css', array(), '1.0.0', 'all');
    wp_enqueue_style('laha_admin');

    wp_enqueue_media();

    wp_register_script('laha_admin_script', get_template_directory_uri() . '/js/laha.admin.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('laha_admin_script');
}

add_action('admin_enqueue_scripts', 'laha_load_admin_scripts');

/*
 * =================
 * FRONT ENQUEUE FUNCTIONS
 * =================
 */

function laha_load_front_scripts()
{
    // Подключение стилей
    wp_enqueue_style('laha_boostrap_style', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('laha_slick_style', get_template_directory_uri() . '/libs/slick/css/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('laha_slick-theme_style', get_template_directory_uri() . '/libs/slick/css/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('laha_magnific-popup_style', get_template_directory_uri() . '/libs/magnific/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('laha_main_style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');

    // Подключение скриптов
    wp_enqueue_script('laha_libs_script', get_template_directory_uri() . '/js/libs.js', array(), '1.0.0', true);
    wp_enqueue_script('laha_bootstrap_script', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/libs/magnific/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('laha_main_script', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'laha_load_front_scripts');

// Вызов loadCSS во фронте
add_action('wp_head','add_load_css',7);
function add_load_css(){
    ?><script><?php
    readfile(get_stylesheet_directory() . '/js/loadCSS.js');
    ?></script><?php
}

add_action('wp_enqueue_scripts', 'laha_load_front_scripts');

// Вызов loadCSS в админке
add_action('admin_enqueue_scripts','add_load_css_admin',7);
function add_load_css_admin(){
    ?><script><?php
    readfile(get_stylesheet_directory() . '/js/loadCSS.js');
    ?></script><?php
}

add_filter('style_loader_tag', 'link_to_loadCSS_script',9999,3);
function link_to_loadCSS_script($html, $handle, $href ) {
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $a = $dom->getElementById($handle.'-css');
    return "<script>loadCSS('" . $a->getAttribute('href') . "',0,'" . $a->getAttribute('media') . "');</script>\n";
}

