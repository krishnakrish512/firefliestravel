<div class="bg_color_1">
    <div class="container margin_80_55">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="map_contact">
                    <?php
                    $map_iframe = get_sub_field('map_iframe');
                    echo $map_iframe; ?>
                </div>
                <!-- /map -->
            </div>
            <div class="col-lg-6">
                <h4>Send a message</h4>
                <p><?php the_sub_field('contact_form_title'); ?></p>
                <div id="message-contact"></div>
                <?php echo do_shortcode("[contact-form-7 id='180' title='Contact form']") ?>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_color_1 -->
</main>
<!--/main-->
