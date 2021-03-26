



<section>
    <div class="main_title_3">
        <span><em></em></span>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('description'); ?></p>
    </div>

    <div class="row">
        <?php
        $country_ids = get_sub_field('countries');
        foreach ($country_ids as $country_id) :
            $country = get_term_by('term_id', $country_id, 'country');
//        var_dump($country);
//        exit();
            $args = [
                'post_type' => 'tour',
                'post_status' => 'publish',
                'tax_query' => [
                    [
                        'taxonomy' => 'country',
                        'field' => 'term_id',
                        'terms' => $country_id,
                    ]
                ],
            ];
            $country_query = new WP_Query($args);
//                var_dump($country_query);
            $tour_count = $country_query->found_posts;
//            var_dump($tour_count);
            wp_reset_query();
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="<?= get_term_link($country_id) ?> " class="grid_item latest_adventure">
                    <figure>
                        <?php $image = wp_get_attachment_image_url(get_field('thumbnail', 'term_' . $country_id), 'full'); ?>
                        <img src="<?= $image; ?>" class="img-fluid" alt="">
                        <div class="info">
                            <em></em>
                            <h3><?= $country->name ?></h3>
                            <span><?= $tour_count ?> Tours</span>
                        </div>
                    </figure>
                </a>
            </div>
        <?php endforeach;
        ?>
    </div>
    <!-- /row -->
    <!--    <a href="#0"><strong>View All <i class="arrow_carrot-right"></i></strong></a>-->
</section>
<!-- /section -->
</div>
<!-- /container -->
