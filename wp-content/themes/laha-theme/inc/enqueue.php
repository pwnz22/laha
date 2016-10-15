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