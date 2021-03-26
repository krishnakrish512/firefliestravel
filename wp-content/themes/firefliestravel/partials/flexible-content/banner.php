<main class="">
    <section class="slider">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php while (have_rows('banner')):
                    the_row()
                    ?>
                    <li>
                        <img src="<?php the_sub_field('image_url'); ?>" alt="">
                    </li>
                <?php endwhile; ?>
            </ul>
            <div id="icon_drag_mobile"></div>
        </div>
        <div class="fixed-overlay-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                        <div class="home-search__content">
                            <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="banner-searchform">
                                <div class="input-group">
                                    <input type="text" name="s" class="form-control"
                                           placeholder="<?php the_sub_field( 'search_placeholder' ); ?>">
                                    <input type="hidden" name="post_type" value="tour">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-search mr-2"></i>
                                            SEARCH
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
