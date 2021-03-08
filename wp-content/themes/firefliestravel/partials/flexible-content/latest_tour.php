<?php $args = [
    'post_type' => 'activitie',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'posts_per_page' => 4,
//    'meta_key' => 'popular_tour',
//    'meta_value' => 1
];
$activities = get_posts($args);
?>
<section>
    <div class="main_title_3">
        <span><em></em></span>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('description'); ?></p>
    </div>
    <div class="row">
        <?php foreach ($activities as $activitie):
            $image = get_the_post_thumbnail($activitie->ID);
            ?>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a href="<?= get_the_permalink($activitie->ID); ?>" class="grid_item latest_adventure">
                    <figure>
                        <?= $image; ?>
                        <div class="info">
                            <em><?php the_field('trip_days', $activitie->ID) ?> <?= get_field('country_name', $activitie->ID) ?></em>
                            <h3><?= get_the_title($activitie->ID); ?></h3>
                        </div>
                    </figure>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- /row -->
    <a href="#0"><strong>View All <i class="arrow_carrot-right"></i></strong></a>
</section>
<!-- /section -->
</div>
<!-- /container -->
