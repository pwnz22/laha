<?php get_header(); ?>

    <!-- Страница фото/видео -->

    <div id="main_container">
        <div class="container">
            <div id="main_wrapper">

                <h2 class="page_title">Фото</h2>

                <?php

                $args = array(
                    //'post_type'=> 'post',
                    //'post_status' => 'publish',
                    //'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'field' => 'slug',
                            'terms' => array('post-format-gallery')
                        )
                    )
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()): ?>

                    <div class="preview mt-20">
                        <div class="row mt-20">
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="preview_item">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('full'); ?>
                                        </a>
                                        <div class="preview_item__caption">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="more_link">подробнее >>></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                <?php endif; ?>

            </div><!-- #main_wrapper -->
        </div><!-- .container -->
    </div><!-- #main_wrap -->


<?php get_footer(); ?>