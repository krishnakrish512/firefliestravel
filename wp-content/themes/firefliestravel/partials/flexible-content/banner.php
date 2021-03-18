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
                                        <?php
                                        $category = get_terms('tour-category');//custom category name
//                                        $category = get_terms('activitie-category');
                                        foreach ($category as $catVal) {
                                            echo '<option value="">' . $catVal->name . '</option>';
                                        }
                                        ?>
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
