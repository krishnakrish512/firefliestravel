<?php $image = get_sub_field('image_url') ?>
<section class="testimonial bg-overlay" style="background-image: url('<?=$image?>'');">
    <div class="container">
        <div class="row">
            <?php
            //            $args = [
            //                'post_type' => 'testimonial',
            //                'orderby' => 'date',
            //                'order' => 'DESC',
            //                'post_status' => 'publish',
            //                'posts_per_page' => 3,
            //            ];
            //            $testimonials = get_posts($args); ?>
            <div class="col-lg-8 mx-auto">
                <div class="owl-carousel owl-theme" id="testimonial">
                    <?php
                    while (have_rows('testimonial_repeater')):
                        the_row();
                        ?>
                        <div class="item">
                            <i class="icon_quotations"></i>
                            <p><?php the_sub_field('description'); ?></p>
                            <div class="auther-info">
                                <h5><?php the_sub_field('title'); ?></h5>
                                <em><?php the_sub_field('sub_title'); ?></em>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </div>
</section>
