<div class="clearfix"></div>
<main>
    <section class="hero_in general" style="background-image: url('<?php the_sub_field('image_url'); ?>')">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>About</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2><?php the_sub_field('title'); ?></h2>
                <p><?php the_sub_field('heading'); ?></p>
            </div>
            <p class="lead text-center mb-5"><?php the_sub_field('description'); ?></p>
            <div class="row justify-content-between">
                <div class="col-lg-5 wow" data-wow-offset="150">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="<?php the_sub_field('image1_url'); ?>" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-lg-7">
                    <p><?php the_sub_field('paragraph'); ?></p>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>
    <!--/bg_color_1-->
