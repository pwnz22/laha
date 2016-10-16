<?php

// Публикуем записи с прошедшой датой
function onetarek_prevent_future_type($post_data)
{
    if ($post_data['post_status'] == 'future' && $post_data['post_type'] == 'events') {
        $post_data['post_status'] = 'publish';
    }
    return $post_data;
}

add_filter('wp_insert_post_data', 'onetarek_prevent_future_type');
remove_action('future_post', '_future_post_hook');

// Для изменения месяца
function laha_theme_change_months($date, $req_format)
{
    // в формате есть "строковые" неделя или месяц
    if (!preg_match('~[FMlS]~', $req_format)) return $date;

    $replace = array(
        "январь" => "января", "Февраль" => "февраля", "Март" => "марта", "Апрель" => "апреля", "Май" => "мая", "Июнь" => "июня", "Июль" => "июля", "Август" => "августа", "Сентябрь" => "сентября", "Октябрь" => "октября", "Ноябрь" => "ноября", "Декабрь" => "декабря",
        "January" => "января", "February" => "февраля", "March" => "марта", "April" => "апреля", "May" => "мая", "June" => "июня", "July" => "июля", "August" => "августа", "September" => "сентября", "October" => "октября", "November" => "ноября", "December" => "декабря",
        "Jan" => "янв.", "Feb" => "фев.", "Mar" => "март.", "Apr" => "апр.", "May" => "мая", "Jun" => "июня", "Jul" => "июля", "Aug" => "авг.", "Sep" => "сен.", "Oct" => "окт.", "Nov" => "нояб.", "Dec" => "дек.",
        "Sunday" => "воскресенье", "Monday" => "понедельник", "Tuesday" => "вторник", "Wednesday" => "среда", "Thursday" => "четверг", "Friday" => "пятница", "Saturday" => "суббота",
        "Sun" => "вос.", "Mon" => "пон.", "Tue" => "вт.", "Wed" => "ср.", "Thu" => "чет.", "Fri" => "пят.", "Sat" => "суб.", "th" => "", "st" => "", "nd" => "", "rd" => "",
    );

    return strtr($date, $replace);
}

add_filter('date_i18n', 'laha_theme_change_months', 11, 2);