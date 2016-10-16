<?php get_header(); ?>

    <!-- Страница мероприятий -->
    <div id="main_container">
        <div class="container">
            <div id="main_wrapper">

                <h2 class="page_title">Архив</h2>

                <?php
                
                if (have_posts()): ?>

                    <table class="events_table">
                        <?php while (have_posts()): the_post(); ?>

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
                                    <a href="<?php the_permalink(); ?>" class="more_link events_more_link">подробнее >>></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table><!-- .events_table -->
                <?php endif; ?>

            </div><!-- #main_wrapper -->
        </div><!-- .container -->
    </div><!-- #main_wrap -->

<?php get_footer(); ?>