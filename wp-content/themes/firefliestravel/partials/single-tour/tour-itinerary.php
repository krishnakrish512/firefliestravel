<div class="description-block" id="itinerary">
    <h5 class="mb-4"> Your Itinerary</h5>
    <?php $counter = 1;
    $number = 1;
    ?>
    <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
        <?php while (have_rows('itinerary_repeater')):
            the_row()
            ?>
            <div class="card">
                <div class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapse<?= $number ?>_payment"
                           aria-expanded="true"><i
                                    class="indicator ti-minus"></i>Day <?= $counter++ ?> :
                            <?php the_sub_field('heading'); ?></a>
                    </h5>
                </div>
                <div id="collapse<?= $number ?>_payment" class="collapse " role="tabpanel"
                     data-parent="#payment">
                    <div class="card-body">
                        <p><?php the_sub_field('paragraph'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; $number++ ?>
        <!-- /card -->
    </div>
</div>