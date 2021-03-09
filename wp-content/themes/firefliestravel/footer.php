<footer>
    <?php $contact = get_field('contact', 'option'); ?>
    <?php $social = get_field('social', 'option'); ?>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <p><img src="<?= $contact['footer_logo'] ?>" width="150" height="36" alt=""></p>
                <p><?= $contact['description'] ?></p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <?php if ($social['facebook_url']): ?>
                            <li><a href="<?= $social['facebook_url'] ?> "><i class="ti-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if ($social['tripadvisor']): ?>
                            <li><a href="<?= $social['tripadvisor'] ?>"><i class="fab fa-tripadvisor"></i></a></li>
                        <?php endif; ?>
                        <?php if ($social['google_business']): ?>
                            <li><a href="<?= $social['google_business'] ?>"><i class="ti-google"></i></a></li>
                        <?php endif; ?>
                        <?php if ($social['pinterest_url']): ?>
                            <li><a href="<?= $social['pinterest_url'] ?>"><i class="ti-pinterest"></i></a></li>
                        <?php endif; ?>
                        <?php if ($social['instagram_url']): ?>
                            <li><a href="<?= $social['instagram_url'] ?>"><i class="ti-instagram"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="tel://61280932400"><i class="ti-mobile"></i> <?= $contact['phone_number'] ?></a></li>
                    <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> <?= $contact['footer_email'] ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--/row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                Website by: <a href="https://nirvanstudio.com/" target="_blank" class="design-by"> Nirvan Studio</a>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="https://nirvan.studio/firefliestravel/terms-and-conditions/">Terms and conditions</a></li>
                    <li class="d-none"><a href="#0">Privacy</a></li>
                    <li><span>© <?php echo date('Y'); ?> Fireflies Travel and Tours Pvt. Ltd.</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<?php wp_footer(); ?>
</body>
</html>