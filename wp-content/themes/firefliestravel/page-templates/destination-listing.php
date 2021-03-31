<?php
/*
Template Name: Destination Listing
*/
get_header();
?>
<div class="clearfix"></div>
<main>
    <?php $image = get_field('destination_image', 'option'); ?>
    <section class="hero_in tours" style="background-image: url('<?= $image; ?>')">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_field('destination_title', 'option') ?></h1>
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
                <?php
                $limit = 12;
                $paged  = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $offset = ( $paged - 1 ) * $limit;

                $args        = [
                    'taxonomy' => 'country',
                    'fields'   => 'ids',
                    'get'      => 'all',
                    'number'   => $limit,
                    'offset'   => $offset
                ];
                $country_ids = get_terms( $args );

                $total = wp_count_terms( 'country' );

                $total_pages       = ceil( $total / $limit );

                foreach ( $country_ids as $country_id ) :
                $country = get_term_by( 'term_id', $country_id, 'country' );
                $args          = [
                    'post_type'      => 'tour',
                    'post_status'    => 'publish',
                    'tax_query'      => [
                        [
                            'taxonomy' => 'country',
                            'field'    => 'term_id',
                            'terms'    => $country_id,
                        ]
                    ],
                    'posts_per_page' => - 1
                ];
                $country_query = new WP_Query( $args );
                $tour_count    = $country_query->found_posts;
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
<!--                                    <span>--><?//= $tour_count ?><!-- Tours</span>-->
                                </div>
                            </figure>
                        </a>
                    </div>
                <?php
                endforeach;
                ?>
            </div>

            <!-- /row -->
        </div>
        <!-- /wrapper-grid -->

        <p class="text-center d-none"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

    </div>
    <!-- /container -->

    <div class="bg_color_1 d-none">
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

