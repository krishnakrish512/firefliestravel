<div class="container  margin_60_35">
    <section>
        <div class="main_title_3 text-center">
            <span><em></em></span>

            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php
        $tour_ids = get_sub_field('tours');
        $args = [
            'post_type' => 'tour',
            'post_status' => 'publish',
            'post__in' => $tour_ids,
            'posts_per_page' => 6
        ];
        $tours = get_posts($args);
        ?>

        <div class="row">
            <?php
            foreach ($tours as $tour):
                ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid box_grid--2">
                        <?php $image = get_the_post_thumbnail($tour->ID, 'category-thumb'); ?>
                        <figure>
                            <a href="<?= get_the_permalink($tour->ID); ?>">
                            <?= $image; ?>
                            <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small><?php the_field('country_name', $tour->ID); ?></small>
                        </figure>
                        <div class="wrapper">
                            <span class="duration"><i
                                        class="icon_clock_alt"></i> <?php the_field('trip_days', $tour->ID) ?></span>
                            <h3>
                                <a href="<?= get_the_permalink($tour->ID); ?>"><?= get_the_title($tour->ID); ?></a>
                            </h3>
                            <?php if (get_field('price', $tour->ID)): ?>
                                <span class="price">From <strong>$<?= get_field('price', $tour->ID); ?></strong> /per person</span>
                            <?php endif; ?>
                            <?php if (!get_field('price', $tour->ID)): ?>
                                <a href="<?php the_permalink($tour->ID); ?>"
                                <h1>Get A Quote Now</h1></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /row -->

    </section>
    <!-- /section -->
</div>
<!-- /container -->