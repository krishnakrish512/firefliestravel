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
                                    <em><?php the_field('trip_days') ?></em>
                                </div>
                                <h3> <?php the_field('country_name'); ?></h3>
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
                        <?php if (get_field('price')): ?>
                            <div><h6 class="m-0"><?php the_field('price') ?></h6></div>
                        <?php endif; ?>
                        <div>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Enquiry Form')) . "?tour_id=" . get_the_ID()); ?>"
                               class="aside-panel-bt btn_1">Inquiry</a></div>
                    </div>
                </div>
            </nav>
            <div class="container margin_60_35 adventure_description">
                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>What you'll do</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <p class="lead"><?php the_content(); ?></p>
                            <h6>Pictures from our users</h6>
                            <div class="pictures magnific-gallery clearfix">
                                <?php $images = get_field('gallery');
                                //                    var_dump($image);
                                //                    exit();
                                foreach ($images as $image):
                                    ?>
                                    <figure><a href="<?= $image; ?>" title="Photo title"
                                               data-effect="mfp-zoom-in"><img
                                                    src="<?= $image; ?>"
                                                    alt=""></a></figure>
                                <?php endforeach; ?>
                            </div>
                            <!-- /pictures -->
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>Your itinerary</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <div class="timeline">
                                <?php while (have_rows('itinerary_repeater')):
                                    the_row()
                                    ?>
                                    <div class="mb-5">
                                        <h3><?php the_sub_field('heading'); ?></h3>
                                        <figure><img src="<?php the_sub_field('image_url'); ?>" class="img-fluid"
                                                     alt="">
                                        </figure>

                                        <div class="content_more">
                                            <p><?php the_sub_field('paragraph'); ?></p>
                                        </div>
                                        <!-- /content_more -->
                                        <a href="#0" class="show_hide d-none"
                                           data-content="toggle-text"><strong>Read
                                                More</strong></a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>What's included</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
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

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-4 fixed_title">
                        <h2>What's Excluded</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                            <ul class="bullets bullets--close">
                                <?php while (have_rows('cost_excluded')):
                                    the_row()
                                    ?>
                                    <li>
                                        <?php the_sub_field('list'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <?php if (get_field('map_image')): ?>
                    <h4>Location</h4>
                    <div class="map map_single mb-5 h-auto">
                        <?php
                        $map_image = get_field('map_image'); ?>
                        <img src="<?= $map_image; ?>" alt="google map" class="img-fluid">
                    </div>
                <?php endif; ?>
                <!-- End Map -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->
<?php endwhile; ?>

<?php get_footer(); ?>


<script>
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
</script>