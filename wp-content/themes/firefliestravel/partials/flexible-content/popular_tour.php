<!-- /container -->
<section class="margin_60_35 bg_color_1">
    <div class="container">
        <div class="main_title_3 text-center">
            <span><em></em></span>
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php

        $args = [
            'post_type' => 'tour',
            'post_status' => 'publish'
        ];

        if (get_sub_field('select_tour_category')) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'tour-category',
                    'field' => 'term_id',
                    'terms' => [get_sub_field('tour_category')]
                ]
            ];

            $args['posts_per_page'] = get_sub_field('number');

            $order_by = get_sub_field('order_by');

            switch ($order_by) {
                case "rand":
                    $args['orderby'] = 'rand';
                    break;
                case "date_desc":
                    $args['orderby'] = 'date';
                    $args['order'] = 'DESC';
                    break;
                case "date_asc":
                    $args['orderby'] = 'date';
                    $args['order'] = 'ASC';
                    break;
            }
        }

        if (!get_sub_field('select_tour_category')) {
            $args['post__in'] = get_sub_field('tours');
            $args['posts_per_page'] = -1;
        }
        $tours_query = new WP_Query($args);
        ?>
        <div id="reccomended_adventure" class="owl-carousel owl-theme">
            <?php while ($tours_query->have_posts()):
                $tours_query->the_post();
                global $post;

                $image = get_the_post_thumbnail($post->ID, 'thumb-crazy');
                ?>
                <div class="item">
                    <a href="<?= get_the_permalink($post->ID); ?>" class="grid_item_adventure">
                        <figure>
                            <?= $image; ?>
                            <div class="info">
                                <em><?php the_field('trip_days', $post->ID) ?></em>
                                <h3><?= get_the_title($post->ID); ?></h3>
                            </div>
                        </figure>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>

</section>

