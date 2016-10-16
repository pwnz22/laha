<?php

/*
======================
    Все AJAX фукнции
======================
*/

add_action('wp_ajax_nopriv_laha_load_posts_by_year', 'laha_load_posts_by_year');
add_action('wp_ajax_laha_load_posts_by_year', 'laha_load_posts_by_year');

function laha_load_posts_by_year()
{
$year = $_POST["year"] === 'ВСЕ' ? '' : $_POST["year"];

$the_query = new WP_Query('post_type=events&year='. $year);

if ($the_query->have_posts()): ?>

    <table class="events_table">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

            <tr>
                <td class="events_title">
                    <div class="events_date"><?php the_date('j'); ?></div>
                    <div class="events_month"><?php the_time('F'); ?></div>
                    <div class="events_place"><?php foreach ((get_the_category()) as $category) {
                            echo $category->cat_name . ' ';
                        } ?></div>
                </td>

                <td class="events_content">
                    <div class="events_content_title"><?php the_title(); ?></div>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="more_link events_more_link <?= strtotime(date(get_option('date_format'))) > strtotime(get_the_date()) ? 'active' : '' ?>"><?= strtotime(date(get_option('date_format'))) > strtotime(get_the_date()) ? 'просмотреть отчет >>>' : 'подробнее
                                    >>>' ?></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table><!-- .events_table -->
<?php endif;

die();
}