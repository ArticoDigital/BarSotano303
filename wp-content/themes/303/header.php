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


