<?php get_header(); ?>
<div class="clearfix"></div>
<main>
    <?php $image = get_field('activities_image', 'option'); ?>
    <section class="hero_in tours" style="background-image: url('<?= $image; ?>')">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_field('activities_title', 'option') ?></h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60_35">

        <div class="wrapper-grid">
            <div class="row">
                <?php while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="box_grid">
                            <?php if (has_post_thumbnail()): ?>
                                <figure>
                                    <?php $image = get_the_post_thumbnail(get_the_ID(), 'category-thumb');
                                    //                                    var_dump($image);
                                    //                                    exit();
                                    ?>
                                    <a href="<?php the_permalink(); ?>"><?= $image; ?>
                                        <div class="read_more"><span>Read more</span></div>
                                    </a>
                                    <small><?php the_field('country_name'); ?></small>
                                </figure>
                            <?php endif; ?>
                            <div class="wrapper">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_field('intro_text'); ?></p>
                                <?php if (get_field('price')): ?>
                                    <span class="price"> <strong><?php the_field('price'); ?></strong> </span>
                                <?php endif; ?>
                                <?php if (!get_field('price')): ?>
                                    <a href="<?php the_permalink(); ?>"
                                    <h1>Get A Quote Now</h1></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /wrapper-grid -->

        <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-help2"></i>
                        <h4>Need Help? Contact us</h4>
                        <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-wallet"></i>
                        <h4>Payments</h4>
                        <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#0" class="boxed_list">
                        <i class="pe-7s-note2"></i>
                        <h4>Cancel Policy</h4>
                        <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                    </a>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
<?php get_footer(); ?>
