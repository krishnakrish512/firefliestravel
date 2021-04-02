<div class="description-block accordion-slide" id="itinerary">
    <h5 class="mb-4"> Your Itinerary</h5>
    <?php $counter = 1;
    ?>
    <?php while (have_rows('itinerary_repeater')):
        the_row();
        ?>
        <div class="accordion-slide-item">
                                    <span class="accordion-slide-header"><?php the_sub_field('heading'); ?><span
                                                class="icon-angle-down"></span></span>
            <p style="display: none;"> <?php the_sub_field('paragraph'); ?></p>
        </div>
    <?php endwhile; ?>
</div>