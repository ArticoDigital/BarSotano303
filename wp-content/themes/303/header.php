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
    <script type="text/javascript">
         /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "280px";
            document.getElementById("mySidenav").style.height = "80%";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.height = "0";
        }

    </script>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">
<video autoplay poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="//demosthenes.info/assets/videos/polina.webm" type="video/webm">
    <source src="//demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
</video>


<?php global $post;


$my_query = new WP_Query('category_name=eventos&showposts=4'); ?>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



    <ul class="Events row">

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php
            $back = get_post_custom_values('fondo', $post->ID)[0];
            $color = get_post_custom_values('color', $post->ID)[0];
            ?>
            <li class="cols-6 row middle end" style='background : <?php echo $back ?>'>
                <a href=" <?php echo get_permalink($post->ID) ?>">
                    
                        <?php the_post_thumbnail(); ?>
                    <?php echo '<span class="cols-6 end" style="color:  ' . $color . ' ">' . get_the_title() . '</span>' ?>
                    <!--<article>
                    <?php the_excerpt(); ?>
                    </article>-->
                </a>
            </li>
        <?php endwhile; ?>
     </ul>
    </div>


  

<!-- Use any element to open the sidenav -->
<div id="Btneventos" onclick="openNav()">
    <img width="100px" src="<?php bloginfo('template_directory') ?>/assets/images/eventos.svg">
</div>

<main id="main">
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

