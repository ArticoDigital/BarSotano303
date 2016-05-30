<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php the_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">
<video autoplay poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="//demosthenes.info/assets/videos/polina.webm" type="video/webm">
    <source src="//demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
</video>
<main>
    <header class="Header row between">
        <figure class="Header-logo">
            <?php include (TEMPLATEPATH . '/includes/logo.php'); ?>
        </figure>
        <nav>
            <ul class="row Nav bottom">
                <li>
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/cocteles.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/ubicacion.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/galeria.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/menu.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="50px" src="<?php bloginfo('template_directory') ?>/assets/images/blog.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="60px" src="<?php bloginfo('template_directory') ?>/assets/images/promo.svg" alt=""></a>
                </li>
                <li>
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/logo_menu.svg" alt=""></a>
                </li>

            </ul>
        </nav>
    </header>

