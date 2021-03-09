<?php $args = [
    'post_type' => 'tour',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'posts_per_page' => 10,
//    'meta_key' => 'popular_tour',
//    'meta_value' => 1
];
$tours = get_posts($args);
?>
<div class="container container-custom margin_80_55">
    <section class="add_bottom_45">
        <div class="main_title_3">
            <span><em></em></span>
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description'); ?></p>
        </div>

        <div id="reccomended_adventure" class="owl-carousel owl-theme">
            <?php foreach ($tours as $tour):
                $image = get_the_post_thumbnail($tour->ID, 'thumb-crazy');
                ?>
                <div class="item">
                    <a href="<?= get_the_permalink($tour->ID); ?>" class="grid_item_adventure">
                        <figure>
                            <?= $image; ?>
                            <div class="info">
                                <em><?php the_field('trip_days', $tour->ID) ?></em>
                                <h3><?= get_the_title($tour->ID); ?></h3>
                            </div>
                        </figure>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- /reccomended_aventure -->
    </section>
    <!-- /section -->
