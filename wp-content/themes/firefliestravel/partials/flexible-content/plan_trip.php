<div class="bg_color_1">
    <div class="container container-custom margin_80_55">
        <div class="main_title_2">
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('description'); ?></p>
        </div>
        <div class="row adventure_feat">
            <?php while (have_rows('plan_tour_repeater')):
                the_row()
                ?>
                <div class="col-md-4">
                    <img src="<?php the_sub_field('image_url'); ?>" alt="" width="75" height="75">
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('description'); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /bg_color_1 -->
