<section class="margin_80_55 ">
    <div class="container">
        <div class="main_title_2">
            <span class="mr-auto"><em></em></span>
            <h2><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('sub_title'); ?></p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <figure class="">
                    <img src="<?php the_sub_field('image_url'); ?>" class="img-fluid" alt="">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class=" accordion_2 accordion-slide" id="accordionExample">
                    <?php while (have_rows('card_repeater')):
                        the_row()
                        ?>
                        <div class="description-block__itinerary-day accordion-slide-item">
                                    <span class="itinerary-header accordion-slide-header"><?php the_sub_field('title'); ?><span
                                                class="icon-angle-down"></span></span>
                            <p style="display: none;"> <?php the_sub_field('description'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>

            </div>
        </div>
    </div>
</section>