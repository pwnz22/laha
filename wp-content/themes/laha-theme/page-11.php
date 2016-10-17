<?php get_header(); ?>

    <!-- Страница мероприятий -->
    <div id="main_container">
        <div class="container">
            <div id="main_wrapper">

                <h2 class="page_title">Мероприятия в России</h2>

                <ul class="events_years">
                    <?php
                    wp_get_archives(array(
                        'type' => 'yearly',
                        'before' => '<li data-url="' . admin_url('admin-ajax.php') . '" class="events_years_item">',
                        'after' => ' / </li>',
                        'post_type' => 'events',
                        'format' => 'custom',
                        'order' => 'ASC'
                    ));
                    ?>
                    <li data-url="<?php echo admin_url('admin-ajax.php'); ?>" class="events_years_item"><a
                            href="http://laha/2016/?post_type=events">ВСЕ</a></li>
                    <li class="ajax_loader"><img src="<?php echo get_template_directory_uri(); ?>/img/ajax-loader.gif"
                                                 alt=""></li>
                </ul>
                <?php
                $the_query = new WP_Query('post_type=events');

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
                                    <a href="<?php the_permalink(); ?>"
                                       class="more_link events_more_link <?= strtotime(date(get_option('date_format'))) > strtotime(get_the_date()) ? 'active' : '' ?>"><?= strtotime(date(get_option('date_format'))) > strtotime(get_the_date()) ? 'просмотреть отчет >>>' : 'подробнее
                                    >>>' ?></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table><!-- .events_table -->

                    <ul class="events_years">
                        <li class="events_years_item">посмотреть мероприятия за: /</li>
                        <?php
                        wp_get_archives(array(
                            'type' => 'yearly',
                            'before' => '<li data-url="' . admin_url('admin-ajax.php') . '" class="events_years_item">',
                            'after' => ' /</li>',
                            'post_type' => 'events',
                            'format' => 'custom',
                            'order' => 'ASC'
                        ));
                        ?>
                        <li data-url="<?php echo admin_url('admin-ajax.php'); ?>" class="events_years_item"><a
                                href="http://laha/2016/?post_type=events">ВСЕ</a></li>
                        <li class="ajax_loader"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/ajax-loader.gif" alt=""></li>
                    </ul>

                <?php endif; ?>

            </div><!-- #main_wrapper -->
        </div><!-- .container -->
    </div><!-- #main_wrap -->

<?php get_footer(); ?>