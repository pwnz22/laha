<?php

/*
======================
    Кастомные типа постов
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

/*
======================
    Активация кастомных меню
======================
*/

function laha_theme_setup()
{
    add_theme_support('menus');

    register_nav_menu('primary', 'Главное меню в шапке');
}

add_action('init', 'laha_theme_setup');


/*
======================
    Кастомные типы записей
======================
*/

// Посты для мероприятий
function laha_events_post_type()
{
    $labels = array(
        'name' => 'Мероприятия',
        'singular_name' => 'Мероприятие',
        'add_new' => 'Добавить новое мероприятие',
        'all_items' => 'Все мероприятия',
        'add_new_item' => 'Добавить новое мероприятие',
        'edit_item' => 'Редактировать мероприятие',
        'new_item' => 'Новое мероприятие',
        'view_item' => 'Показать мероприятие',
        'search_item' => 'Искать мероприятие',
        'not_found' => 'Мероприятий не найдено',
        'not_found_in_trash' => 'Мероприятий в корзине не найдено',
        'parent_item_colon' => 'Родительское мероприятие'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'мероприятие' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revision',
        ),
        'taxonomies' => array(
            'category',
            'post_tag',
        ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-calendar-alt',
        'exclude_from_search' => false
    );
    register_post_type('events', $args);
    //flush_rewrite_rules();

}

add_theme_support('post-thumbnails');
add_action('init', 'laha_events_post_type');


// Посты для мероприятий
function laha_slider_post_type()
{
    $labels = array(
        'name' => 'Слайдер',
        'singular_name' => 'Слайд',
        'add_new' => 'Добавить новый слайд',
        'all_items' => 'Все слайды',
        'add_new_item' => 'Добавить новый слайд',
        'edit_item' => 'Редактировать слайд',
        'new_item' => 'Новый слайд',
        'view_item' => 'Показать слайд',
        'search_item' => 'Искать слайд',
        'not_found' => 'Слайдов не найдено',
        'not_found_in_trash' => 'Слайдов в корзине не найдено',
        'parent_item_colon' => 'Родительскый слайд'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'slider' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revision',
        ),
        'taxonomies' => array(
            'category',
            'post_tag',
        ),
        'menu_position' => 6,
        'menu_icon' => 'dashicons-exerpt-view',
        'exclude_from_search' => false
    );
    register_post_type('slider', $args);
    //flush_rewrite_rules();

}

add_action('init', 'laha_slider_post_type');
