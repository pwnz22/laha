<?php

/*
======================
    ADMIN PAGE
======================
*/

function laha_add_admin_page()
{
    // Активация Настроек Темы
    add_menu_page('Настройки Темы Laha', 'Настройки темы', 'manage_options', 'laha_theme', 'laha_theme_header_page', 'dashicons-admin-customizer', 30);

    // Активация подменю для Настроек Темы
    add_submenu_page('laha_theme', 'Настройки шапки', 'Шапка', 'manage_options', 'laha_theme', 'laha_theme_header_page');
    add_submenu_page('laha_theme', 'Форматы записей', 'Форматы записей', 'manage_options', 'laha_theme_post_formats', 'laha_theme_post_formats_page');
    add_submenu_page('laha_theme', 'Laha CSS Options', 'Custom CSS', 'manage_options', 'laha_theme_css', 'laha_theme_css_page');

    // Активация кастомных настроек
    add_action('admin_init', 'laha_custom_settings');
}

add_action('admin_menu', 'laha_add_admin_page');

function laha_custom_settings()
{
    // Header settings
    // logo
    register_setting('laha_settings_group', 'site_logo');
    add_settings_section('laha_header_logo', '', '', 'laha_theme');
    add_settings_field('header_logo', 'Лого в шапке', 'laha_header_logo', 'laha_theme', 'laha_header_options');
    // site name
    register_setting('laha_settings_group', 'site_name');
    add_settings_section('laha_header_options', '', '', 'laha_theme');
    add_settings_field('header_name', 'Название в шапке', 'laha_header_name', 'laha_theme', 'laha_header_options');

    // Theme Support Options
    register_setting('laha_theme_support', 'post_formats');
    add_settings_section('laha_theme_options', 'Настройки Темы', 'laha_theme_options', 'laha_theme_post_formats');
    add_settings_field('post-formats', 'Форматы записей', 'laha_post_formats', 'laha_theme_post_formats', 'laha_theme_options');
}

//Post Formats Callback Function
function laha_theme_options()
{
    echo 'Активация и деактивая форматов записей';
}

function laha_post_formats_callback($input)
{
    var_dump($input);
}

function laha_post_formats()
{
    $options = get_option('post_formats');
    $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
    $output = '';
    foreach ($formats as $format) {
        $checked = (isset($options[$format]) == 1 ? 'checked' : '');
        $output .= '<label><input type="checkbox" id="' . $format . '" name="post_formats[' . $format . ']" value="1" ' . $checked . ' /> ' . $format . '</label><br>';
    }
    echo $output;
}

// Header Functions
// Инпут для изменении названия
function laha_header_name()
{
    $header_name = esc_attr(get_option('site_name'));
    echo '<input type="text" name="site_name" value="' . $header_name . '" placeholder="Название в шапке">';
}

// Инпут для изменении лого
function laha_header_logo()
{
    $logo = esc_attr(get_option('site_logo'));
    if (empty($logo)) {
        echo '<input type="button" class="button button-secondary" value="Загрузить лого" id="upload-button"><input type="hidden" id="site_logo" name="site_logo" value="" >';
    } else {
        echo '<input type="button" class="button button-secondary" value="Заменить лого" id="upload-button"><input type="hidden" id="site_logo" name="site_logo" value="' . $logo . '" ><input type="button" class="button button-secondary" value="Удалить лого" id="remove-button">';
    }

}

// Фукнции submenu
// Страница настроек шапки
function laha_theme_header_page()
{
    require_once(get_template_directory() . '/inc/templates/laha-header-settings-page.php');
}

// Страница формата записей
function laha_theme_post_formats_page()
{
    require_once(get_template_directory() . '/inc/templates/laha-post-formats-page.php');
}

function laha_theme_css_page()
{
    echo "custom css page";
}