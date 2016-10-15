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
}

add_action('admin_enqueue_scripts', 'laha_load_admin_scripts');