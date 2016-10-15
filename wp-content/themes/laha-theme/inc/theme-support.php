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