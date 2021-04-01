<div class="clearfix"></div>

<main>

    <section class="hero_in general" style="background-image: url('<?php the_sub_field('image_url'); ?>')">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Services</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="container margin_80_55">
        <div class="row">
            <?php while (have_rows('service_repeater')):
                the_row();
                ?>
                <div class="col-lg-3 col-md-6">
                    <a href="javascript:void(0)" class="grid_item latest_adventure">
                        <figure>
                            <img src="<?php the_sub_field('image_url'); ?>" class="img-fluid" alt="">
                            <div class="info">
                                <h3><?php the_sub_field('title'); ?></h3>
                            </div>
                        </figure>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!--/container-->
</main>
<!--/main-->
