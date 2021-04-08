<main class="">
    <section class="slider">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php while (have_rows('banner')):
                    the_row()
                    ?>
                    <li>
                        <img src="<?php the_sub_field('image_url'); ?>" alt="">
                        <div class="meta container">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <div class="info">
                                <p><?php the_sub_field('sub_title') ?></p>
                            </div>
                            <a href="<?php the_sub_field('link'); ?>" class="btn_1">Read more</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div id="icon_drag_mobile"></div>
        </div>
        <div class="fixed-overlay-content d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h3>Book unique experiences</h3>
                        <p>Expolore top rated tours, hotels and restaurants around the world</p>
                        <form>
                            <div class="row no-gutters custom-search-input-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text"
                                               placeholder="What are you looking for...">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <select class="wide">
                                        <option>All Categories</option>
                                        <option>Tours</option>
                                        <option>Hotels</option>
                                        <option>Restaurants</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>


