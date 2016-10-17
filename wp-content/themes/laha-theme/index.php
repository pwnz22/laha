<?php get_header(); ?>

    <div id="main_container">
        <div class="container">
            <div id="main_wrapper">

                <!-- MAIN SLIDER -->
                <div class="slider">
                    <?php
                    $the_query = new WP_Query('post_type=slider'); ?>

                    <?php if ($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>

                            <div class="slider_item">
                                <img src="<?php echo get_field('slider'); ?>" alt="<?php the_title(); ?>">
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- .slider wrapper -->
                <div class="bottom_line"></div><!-- red line -->

                <!-- ANOUNCE -->

                <?php
                $args = array(
                    'post_type' => 'events',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 1
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()):

                    while ($the_query->have_posts()): $the_query->the_post(); ?>

                        <div class="anounce">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="anounce_item">
                                        <h2 class="anounce_item__title">Ближайшее мероприятие</h2>


                                        <div class="anounce_item__description"><strong><?php the_title(); ?></strong>
                                        </div>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="anounce_item__more clearfix">
                                            <a href="<?php the_permalink(); ?>" class="more_link pull-right">подробнее
                                                >>></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- .anounce -->
                        <div class="bottom_line"></div><!-- red line -->

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php

                $args = array(
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 3,
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

                    <div class="preview">
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
                <div class="bottom_line"></div><!-- red line -->
                <br>
                <br>
                <br>
                <br>

            </div><!-- #main_wrapper -->
        </div><!-- .container -->
    </div><!-- #main_wrap -->

<?php get_footer(); ?>