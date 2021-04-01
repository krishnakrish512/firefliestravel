<div class="clearfix"></div>
<main>
    <section class="hero_in contacts" style="background-image: url('<?php the_sub_field('image_url'); ?>')">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php the_sub_field('title'); ?></h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <?php $contact = get_field('contact', 'option'); ?>
    <div class="contact_info">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Address</h4>
                    <span><?= $contact['address'] ?></span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>Email address</h4>
                    <span><?= $contact['email_address'] ?><br> <?= $contact['website_url'] ?></span>
                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Contacts info</h4>
                    <span><?= $contact['contact_number'] ?><br> <?= $contact['landline_number'] ?></span>
                </li>
            </ul>
        </div>
    </div>
    <!--/contact_info-->
