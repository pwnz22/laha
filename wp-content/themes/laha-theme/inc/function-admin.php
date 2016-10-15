<?php

/*
======================
    ADMIN PAGE
======================
*/

function laha_add_admin_page()
{
    // Активация Настроек Темы
    add_menu_page('Настройки Темы Laha', 'Настройки темы', 'manage_options', 'laha_theme', 'laha_theme_create_page', 'dashicons-admin-customizer', 30);

    // Активация подменю для Настроек Темы
    add_submenu_page('laha_theme', 'Настройки Темы Laha', 'Главная', 'manage_options', 'laha_theme', 'laha_theme_settings_page');

    // Custom CSS
    add_submenu_page('laha_theme', 'Laha CSS Options', 'Custom CSS', 'manage_options', 'laha_theme_css', 'laha_theme_settings_page');

    // Активация кастомных настроек
    add_action('admin_init', 'laha_custom_settings');
}

add_action('admin_menu', 'laha_add_admin_page');

function laha_custom_settings()
{
    register_setting('laha_settings_group', 'site_name');
    add_settings_section('laha_header_options', 'Настройки шапки', 'laha_header_options', 'laha_theme');
    add_settings_field('header_name', 'Название в шапке', 'laha_header_name', 'laha_theme', 'laha_header_options');
}

function laha_header_name()
{
    $header_name = esc_attr(get_option('site_name'));
    echo '<input type="text" name="site_name" value="'.$header_name.'" placeholder="Название в шапке">';
}

function laha_header_options()
{
    echo 'Изменения название сайта';
}

function laha_theme_create_page()
{
    require_once(get_template_directory() . '/inc/templates/laha-admin.php');
}

function laha_theme_settings_page()
{

}