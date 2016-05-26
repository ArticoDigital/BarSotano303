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
<header class="Header">
    <div class="buttonNav">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav class="Header-navNetwork">
        <ul>
            <div class="Languages">
                <a href="">EN</a>
                <a href="">ES</a>
            </div>
            <li>
                <a href="">
                    <svg width="13px" height="27px" viewBox="0 0 13 27" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">

                        <defs></defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group-5" fill="#2C3351">
                                <g>
                                    <path
                                        d="M8.2656,27 L2.7536,27 L2.7536,13.676 L-0.0004,13.676 L-0.0004,9.083 L2.7536,9.083 L2.7536,6.33 C2.7536,2.584 4.3086,0.354 8.7286,0.354 L12.4026,0.354 L12.4026,4.948 L10.1066,4.948 C8.3866,4.948 8.2736,5.59 8.2736,6.789 L8.2656,9.083 L12.4306,9.083 L11.9446,13.676 L8.2656,13.676 L8.2656,27 Z"
                                        id="Fill-3"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href="">
                    <svg width="27px" height="23px" viewBox="0 0 27 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-32.000000, -3.000000)" id="Fill-1" fill="#2C3351">
                                <path
                                    d="M44.832,10.2692 C44.832,10.2692 44.223,5.5332 48.346,4.0882 C48.346,4.0882 51.855,2.6372 54.191,5.3652 C54.191,5.3652 56.926,4.9222 57.537,4.0882 C57.537,4.0882 57.369,5.7622 55.475,6.9862 C55.475,6.9862 57.203,6.9822 58.428,6.3152 C58.428,6.3152 56.703,8.4692 55.959,8.8052 C55.197,9.1022 56.703,13.9482 52.187,19.6832 C52.187,19.6832 48.771,24.3082 42.383,25.2022 C39.787,25.5642 35.977,25.8702 32.133,22.9722 C32.133,22.9722 36.031,23.4732 39.932,20.5762 C39.932,20.5762 35.921,20.2422 34.977,16.8982 C34.977,16.8982 36.812,16.9012 37.203,16.8442 C37.203,16.8442 32.912,15.3942 32.969,11.2992 C32.969,11.2992 34.418,11.9412 35.227,11.8572 C35.227,11.8572 31.602,9.1522 33.748,4.6992 C33.748,4.6992 37.65,10.1572 44.832,10.2692 Z"></path>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href="">
                    <svg width="22px" height="23px" viewBox="0 0 22 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-73.000000, -3.000000)" id="inst" fill="#2C3351">
                                <g transform="translate(73.000000, 3.000000)">
                                    <path
                                        d="M19.6621,5.8608 C19.6621,6.2198 19.3711,6.5108 19.0141,6.5108 L16.6641,6.5108 C16.3011,6.5108 16.0101,6.2198 16.0101,5.8608 L16.0101,3.5088 C16.0101,3.1498 16.3011,2.8608 16.6641,2.8608 L19.0141,2.8608 C19.3711,2.8608 19.6621,3.1498 19.6621,3.5088 L19.6621,5.8608 Z M21.8611,5.2518 C21.8611,2.8488 19.9141,0.9018 17.5171,0.9018 L5.7581,0.9018 L5.7581,6.4328 L4.8671,6.4328 L4.8671,0.9018 L4.4711,0.9018 C4.3961,0.9018 4.3201,0.9058 4.2481,0.9098 L4.2481,6.4328 L3.3521,6.4328 L3.3521,1.0498 C3.1641,1.0988 2.9801,1.1618 2.8051,1.2358 L2.8051,6.4328 L1.9121,6.4328 L1.9121,1.7378 C0.8281,2.5288 0.1231,3.8078 0.1231,5.2518 L0.1231,7.9448 L7.1481,7.9448 C8.1091,7.0838 9.3771,6.5618 10.7711,6.5618 C12.1641,6.5618 13.4321,7.0838 14.3911,7.9448 L21.8611,7.9448 L21.8611,5.2518 Z"
                                        id="Fill-9"></path>
                                    <path
                                        d="M10.7715,17.4292 C7.7695,17.4292 5.3345,14.9972 5.3345,11.9972 C5.3345,10.7862 5.7305,9.6732 6.3965,8.7712 L0.1235,8.7712 L0.1235,18.2922 C0.1235,20.6952 2.0725,22.6422 4.4705,22.6422 L17.5175,22.6422 C19.9145,22.6422 21.8615,20.6952 21.8615,18.2922 L21.8615,8.7712 L15.1445,8.7712 C15.8105,9.6732 16.2055,10.7862 16.2055,11.9972 C16.2055,14.9972 13.7715,17.4292 10.7715,17.4292"
                                        id="Fill-11"></path>
                                    <path
                                        d="M10.7715,15.0952 C9.0585,15.0952 7.6715,13.7042 7.6715,11.9972 C7.6715,10.2862 9.0585,8.9002 10.7715,8.9002 C12.4805,8.9002 13.8675,10.2862 13.8675,11.9972 C13.8675,13.7042 12.4805,15.0952 10.7715,15.0952 M10.7715,7.7302 C8.4125,7.7302 6.5035,9.6382 6.5035,11.9972 C6.5035,14.3512 8.4125,16.2612 10.7715,16.2612 C13.1255,16.2612 15.0335,14.3512 15.0335,11.9972 C15.0335,9.6382 13.1255,7.7302 10.7715,7.7302"
                                        id="Fill-13"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href="">
                    <svg width="28px" height="20px" viewBox="0 0 28 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-109.000000, -5.000000)" id="Group-8" fill="#2C3351">
                                <g transform="translate(108.000000, 5.000000)">
                                    <path
                                        d="M11.0254,14.4487 L11.0254,5.5037 C13.8924,6.9987 16.7424,8.4847 19.6264,9.9907 C16.7504,11.4817 13.9004,12.9577 11.0254,14.4487 M27.5744,3.8567 C27.2444,2.4177 26.0684,1.3567 24.6504,1.1977 C21.2964,0.8237 17.9024,0.8217 14.5214,0.8237 C11.1424,0.8217 7.7464,0.8237 4.3924,1.1977 C2.9764,1.3567 1.8004,2.4177 1.4684,3.8567 C0.9984,5.9047 0.9924,8.1407 0.9924,10.2507 C0.9924,12.3587 0.9924,14.5947 1.4644,16.6437 C1.7954,18.0827 2.9704,19.1437 4.3864,19.3027 C7.7424,19.6767 11.1364,19.6787 14.5154,19.6767 C17.8964,19.6787 21.2934,19.6767 24.6444,19.3027 C26.0604,19.1437 27.2384,18.0827 27.5684,16.6437 C28.0414,14.5947 28.0434,12.3587 28.0434,10.2507 C28.0434,8.1407 28.0444,5.9047 27.5744,3.8567"
                                        id="Fill-6"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
    <div class="Header-right">
        <form action="">
            <input type="text" placeholder="Buscar">
            <button>
                <svg width="22px" height="23px" viewBox="0 0 22 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">

                    <defs>
                        <path id="path-1" d="M0,0.907 L21.781,0.907 L21.781,23 L0,23"></path>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g>
                            <mask id="mask-2" fill="white">
                                <use xlink:href="#path-1"></use>
                            </mask>
                            <g id="Clip-2"></g>
                            <path
                                d="M8.7368,1.3938 C10.8408,1.3938 12.9558,2.1948 14.5598,3.8038 C17.7778,7.0148 17.7778,12.2078 14.5598,15.4188 C11.3408,18.6288 6.1308,18.6288 2.9118,15.4188 C-0.3072,12.2078 -0.3072,7.0148 2.9118,3.8038 C4.5158,2.1948 6.6308,1.3938 8.7368,1.3938 M8.7368,0.9078 C6.4988,0.9078 4.2628,1.7588 2.5528,3.4568 C-0.8512,6.8578 -0.8512,12.3728 2.5528,15.7768 C5.8408,19.0468 11.1048,19.1598 14.5338,16.1148 L21.3568,22.9268 C21.4538,23.0228 21.6198,23.0228 21.7078,22.9368 C21.8038,22.8488 21.8038,22.6748 21.7168,22.5878 L14.8828,15.7768 C14.8928,15.7668 14.8928,15.7668 14.9028,15.7668 C18.3048,12.3658 18.3138,6.8588 14.9108,3.4568 C13.2088,1.7588 10.9728,0.9078 8.7368,0.9078"
                                id="Fill-1" fill="#000000" mask="url(#mask-2)"></path>
                        </g>
                    </g>
                </svg>
            </button>
        </form>
        <a href="">EN</a>
        <a href="" class="active">ES</a>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php if (get_the_category()[0]->name == "portafolios") : ?>
            <figure class="Header-image"><?php echo get_the_post_thumbnail(30); ?></figure>
        <?php elseif (get_the_category()[0]->name == "noticias") : ?>
            <figure class="Header-image"><?php echo get_the_post_thumbnail(2); ?></figure>
        <?php else: ?>
            <figure class="Header-image"><?php the_post_thumbnail(); ?></figure>
        <?php endif; ?>


    <?php endwhile; endif;
    rewind_posts(); ?>
</header>

<?php wp_nav_menu(array('theme_location' => 'menuHeader', 'container' => 'nav')) ?>

<main>


