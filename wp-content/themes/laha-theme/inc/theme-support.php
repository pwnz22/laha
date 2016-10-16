<?php

/*
======================
    THEME SUPPORT OPTIONS
======================
*/

$options = get_option('post_formats');
$output = array();

foreach ($options as $option => $value) {
    $output[] = (isset($option) == 1 ? $option : '');
}
if (!empty($options)) {
    add_theme_support('post-formats', $output);
}

// Активая кастомных меню
function laha_theme_setup ()
{
    add_theme_support('menus');

    register_nav_menu('primary', 'Главное меню в шапке');
}

add_action('init', 'laha_theme_setup');