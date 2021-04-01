<?php get_header(); ?>
<?php while (have_posts()):
    the_post();
    ?>

    <div class="clearfix"></div>
    <main>
        <section class="hero_in adventure_detail"
                 style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
            <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="main_info">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <em><?php the_field('trip_days') ?></em></div>
                                <h1><?php the_field('country_name'); ?></h1>
                                <!--                                <p>--><?php //the_field('country_name');
                                ?><!--</p>-->
                            </div>
                            <div class="col-lg-8">
                                <div class="pl-lg-4">
                                    <h3><?php the_title(); ?></h3>
                                    <ul>
                                        <?php while (have_rows('list_repeater')):
                                            the_row()
                                            ?>
                                            <li>
                                                <i class="<?php the_sub_field('icons'); ?>"></i><?php the_sub_field('title'); ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /main_info -->
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="clearfix">
                            <li><a href="#description" class="active">Description</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#itinerary">Itinerary</a></li>
                            <li><a href="#include">Include</a></li>
                            <li><a href="#exclude">Exclude</a></li>
                            <?php if (get_field('map_image')): ?>
                                <li><a href="#location">Location</a></li>
                            <?php endif; ?>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <section class="description">
                            <div class="description-block" id="description">
                                <h5 class="mb-4 d-none">Description</h5>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                            <hr>
                            <?php
                            if (get_field('gallery')) {
                                get_template_part("partials/single-tour/gallery");
                            }
                            ?>
                            <hr>
                            <?php
                            if (have_rows('itinerary_repeater')) {
                                get_template_part("partials/single-tour/tour", "itinerary");
                            }
                            ?>
                            <hr>
                            <div class="description-block" id="include">
                                <h5>Cost Includes</h5>
                                <ul class="bullets bullets--tick">
                                    <?php while (have_rows('cost_included')):
                                        the_row()
                                        ?>
                                        <li>
                                            <?php the_sub_field('list'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <hr>
                            <div class="description-block" id="exclude">
                                <h5>Cost Exclude</h5>
                                <ul class="bullets bullets--tick">
                                    <?php while (have_rows('cost_excluded')):
                                        the_row()
                                        ?>
                                        <li>
                                            <?php the_sub_field('list'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <hr>
                            <?php if (get_field('map_image')): ?>
                                <div class="description-block" id="location">
                                    <h5>Location</h5>
                                    <div class="map map_single mb-5">
                                        <?php
                                        $map_image = get_field('map_image'); ?>
                                        <img src="<?= $map_image; ?>" alt="google map" class="img-fluid">
                                    </div>
                                    <!-- End Map -->
                                </div>
                            <?php endif; ?>
                            <?php get_template_part("partials/single-tour/tour", "share"); ?>
                        </section>
                    </div>

                    <?php get_template_part("partials/single-tour/sidebar"); ?>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->
<?php endwhile; ?>

<?php get_footer(); ?>


<!--<script>-->
<!--    HeaderVideo.init({-->
<!--        container: $('.header-video'),-->
<!--        header: $('.header-video--media'),-->
<!--        videoTrigger: $("#video-trigger"),-->
<!--        autoPlayVideo: true-->
<!--    });-->
<!--</script>-->