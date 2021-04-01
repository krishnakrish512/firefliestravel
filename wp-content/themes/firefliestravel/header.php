<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Firefliestravel </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144-precomposed.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
        <?php wp_head(); ?>

</head>

<body>
<div id="page">
    <?php $contact = get_field('contact', 'option'); ?>

    <header class="header  position-static clearfix">
        <div class="header-top">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="header-top--logo">
                    <a href="<?= get_home_url(); ?>">
                        <img src=" <?= $contact['header_logo'] ?>" alt=""
                             width='180'>
                    </a>
                </div>
                <ul class="list-inline">
                    <li><a href="tel: +977 9802050692"> <i class="icon_phone"></i><?= $contact['header_number'] ?></a>
                    </li>
                    <li><a href="tel: info@firefliestravel.com.np"> <i class="icon_mail"></i>
                            <?= $contact['header_email'] ?> </a></li>
                </ul>

            </div>
        </div>
        <div class="header-main clearfix">
            <div class="container">
                <div id="logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
                    } ?>


                    <a href="<?= get_home_url(); ?>">
                        <img src="<?php echo $logo; ?>" width="150" height="36" alt="" class="logo_normal">
                        <img src="<?php echo $logo; ?>g" width="150" height="36" alt="" class="logo_sticky">
                    </a>
                </div>
                <!-- /top_menu -->
                <ul id="top_menu">
                    <li>
                        <a href="javascript:void(0)" class="icon_search" title="Search Icon"></a>
                        <a href="javascript:void(0)" class="icon_close" title="Search Icon" style="display:none;"></a>
                    </li>
                </ul>
                <a href="#menu" class="btn_mobile">
                    <div class="hamburger hamburger--spin" id="hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <nav id="menu" class="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => ''
                    )); ?>
                </nav>
            </div>
            <form action="<?php echo esc_url(home_url('/')); ?>" class="top-search-form">
                <div class="container">
                    <input type="text" class="form-control" placeholder="Type & Hit Enter...">
                </div>

            </form>
        </div>

    </header>
    <!-- /header -->
    <div class="clearfix"></div>
