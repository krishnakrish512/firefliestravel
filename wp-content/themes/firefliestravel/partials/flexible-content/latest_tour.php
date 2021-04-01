<section class="margin_60_35">
    <div class="container">
        <div class="main_title_3 text-center">
            <span><em></em></span>
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php if (have_rows('content_repeater')): ?>

            <nav class="d-flex justify-content-center">

                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <?php $count = 1; ?>
                    <?php while (have_rows('content_repeater')):
                        the_row();
                        ?>
                        <a href="#tabs-<?= $count; ?> " class="nav-link " id="nav-asia-tab" data-toggle="tab"
                           role="tab"
                           aria-controls="nav-home" aria-selected="true"><?php the_sub_field('nav'); ?></a>
                        <?php $count++; endwhile; ?>
                </div>

            </nav>
            <div class="tab-content mb-3" id="nav-tabContent">
                <?php $count = 1; ?>
                <?php while (have_rows('content_repeater')):
                    the_row();
                    ?>
                    <div class="tab-pane fade show " id="tabs-<?= $count; ?>" role="tabpanel"
                         aria-labelledby="nav-asia-tab">
                        <div class="grid-tile">
                            <?php
                            $country_ids = get_sub_field('countries');
                            foreach ($country_ids as $country_id) :
                                $country = get_term_by('term_id', $country_id, 'country');
//                                var_dump($country);
//                                exit();
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
                                <div class="grid-tile-item ">
                                    <div class="media-card">
                                        <figure>
                                            <?php $image = wp_get_attachment_image_url(get_field('thumbnail', 'term_' . $country_id), 'full'); ?>
                                            <img src="<?= $image ?>" class="img-fluid" alt="">
                                            <div class="media-card--info">
                                                <h5 class="has-line"><?= $country->name ?></h5>
                                                <span><?= $tour_count ?> Tours</span>
                                                <a href="<?= get_term_link($country_id) ?>" class="btn_2">Explore</a>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php $count++;endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
</main>
<!-- /main -->
<script>

    // $('#nav-asia-tab a'){
    //     e.preventDefault()
    //     $(this).tab('show')
    // }

</script>


