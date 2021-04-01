<div class="description-block" id="itinerary">
    <h5 class="mb-4"> Your Itinerary</h5>
    <?php $counter = 1;
    ?>
    <?php while (have_rows('itinerary_repeater')):
        the_row();
        ?>
        <div class="description-block__itinerary-day">
                                    <span class="itinerary-header"><?php the_sub_field('heading'); ?><span
                                                class="icon-angle-down"></span></span>
            <p style="display: none;"> <?php the_sub_field('paragraph'); ?></p>
        </div>
    <?php endwhile; ?>
</div>