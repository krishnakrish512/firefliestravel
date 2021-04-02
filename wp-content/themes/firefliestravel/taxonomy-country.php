<?php
get_header();

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>
<?php $image = get_field('country_image', 'option'); ?>
<section class="hero_in tours" style="background-image: url('<?= $image; ?>')">
    <div class="wrapper">
        <div class="container">
            <h1 class="fadeInUp"><span></span><?php the_field('country_title', 'option') ?></h1>
        </div>
    </div>
</section>
<section class="margin_60_35 bg_color_1">
    <div class="container">
        <div class="destination-item-aside__relate-tour__tittle">
            <div class="section-tittle">
                <h2>Discover</h2>
                <div class="section-tittle__line-under"></div>
                <p><?= $term->name ?> <span>Tour</span></p>
            </div>
        </div>
        <div class="row">
            <?php while (have_posts()):
                the_post();
                global $post;

                $image = get_the_post_thumbnail($post->ID, 'thumb-crazy');
                ?>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid box_grid--2">
                        <?php $image = get_the_post_thumbnail($post->ID, 'category-thumb'); ?>
                        <figure>
                            <a href="<?= get_the_permalink($post->ID); ?>"">
                            <?= $image; ?>
                            <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small><?php the_field('country_name', $post->ID); ?></small>
                        </figure>
                        <div class="wrapper">
                            <span class="duration"><i
                                        class="icon_clock_alt"></i> <?php the_field('trip_days', $post->ID) ?></span>
                            <h3>
                                <a href="<?= get_the_permalink($post->ID); ?>"><?= get_the_title($post->ID); ?></a>
                            </h3>
                            <?php if (get_field('price', $post->ID)): ?>
                                <span class="price">From <strong>$<?= get_field('price', $post->ID); ?></strong> /per person</span>
                            <?php endif; ?>
                            <?php if (!get_field('price', $post->ID)): ?>
                                <a href="<?php the_permalink($post->ID); ?>"
                                <h1>Get A Quote Now</h1></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>
