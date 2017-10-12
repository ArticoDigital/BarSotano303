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
            document.getElementById("mySidenav").style.width = "300px";
            document.getElementById("mySidenav").style.height = "70%";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.height = "0";
        }
        

    </script>
    <?php wp_head(); ?>

</head>
<?php
   
            
          
            $videomp4 = get_post_custom_values($key = 'video_mp4')[0];
            $videowebm = get_post_custom_values($key = 'video_webm')[0];
            $videowebm = get_the_post_thumbnail_url();
            ?>
<body <?php echo $videomp4 ?> <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?> " id="<?php echo get_query_var('pagename') ?>">
    <video autoplay muted poster="<?php bloginfo('template_url') ?>/assets/images/back.jpg" id="bgvid" loop>
    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <!--<source src="<?php bloginfo('template_url') ?>/assets/video/back.mp4" type="video/webm">-->
    <?php if(is_home() || is_front_page()):?>

    <source src="<?php bloginfo('template_url') ?>/assets/video/back.mp4" type="video/mp4">
    <!--<source src="<?php bloginfo('template_url') ?>/assets/video/BarSotano303.webm" type="video/webm">-->
    <source src="<?php bloginfo('template_url') ?>/assets/video/back.webm" type="video/webm">
    <?php endif; ?>
</video>
    <?php if(is_home() || is_front_page()):?>
    <div class="videoBack"></div>
    <?php endif; ?>

<?php global $post;


$my_query = new WP_Query('category_name=eventos&showposts=4'); ?>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


    <div id="container_nav">
    <ul class="Events row">

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php
            
            $back = get_post_custom_values('fondo', $post->ID)[0];
            $color = get_post_custom_values('color', $post->ID)[0];
            $attr = array();
            ?>
            <li class="cols-6 row middle end" style='background : <?php echo $back ?>'>
                <a href=" <?php echo get_permalink($post->ID) ?>">
                    <div class="thumbnail">
                        <?php 

                         $meta = wp_get_attachment_metadata( get_post_thumbnail_id($post->ID ) );
                         //print_r($meta);

                            $width_i  = $meta['width'];
                            $height_i = $meta['height'];
                            if($width_i < $height_i)
                            //echo $width_i."_";
                            //echo $height_i;
                            $attr = array(
                                
                                'class' => "portrait",
                                
                            );

                        the_post_thumbnail('thumbnail',$attr); 
                        ?>
                        </div>
                    <?php echo '<span class="cols-6 end" style="color:  ' . $color . ' ">' . get_the_title() . '</span>' ?>
                    <!--<article>
                    <?php the_excerpt(); ?>
                    </article>-->
                </a>
            </li>
        <?php endwhile; ?>
     </ul>
     </div>
    </div>




  

<!-- Use any element to open the sidenav -->
<a id="Btneventos" onclick="openNav()">
    <img width="100px" src="<?php bloginfo('template_directory') ?>/assets/images/eventos.svg">
</a>

<main id="main">
    <header class="Header row between middle center">
        <a href="/"><figure class="Header-logo">
            <?php include (TEMPLATEPATH . '/includes/logo.php'); ?>
        </figure></a>
        <nav>
            <ul class="row Nav bottom">
            
                <li class="hidden"> 
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/cocteles.svg" alt=""></a>
                </li>
                <li>
                    <a href="/ubicacion" data-tooltip="Ubicación"><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/ubicacion.svg" alt=""></a>
                </li>
                <li>
                    <a href="/galerias" data-tooltip="Fotos"><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/galeria.svg" alt=""></a>
                </li>
                <li>
                    <a href="/menu" data-tooltip="Menú"><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/menu.svg" alt=""></a>
                </li>
                <li class="hidden">
                    <a href=""><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/blog.svg" alt=""></a>
                </li>
                <li class="hidden">
                    <a href=""><img width="60px" src="<?php bloginfo('template_directory') ?>/assets/images/promo.svg" alt=""></a>
                </li>
                <li>
                    <a href="/sobre-el-bar-303" data-tooltip="Nosotros"><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/nosotros.svg" alt=""></a>
                </li>
                <li>
                    <a href="/contacto"  data-tooltip="Contacto"><img width="40px" src="<?php bloginfo('template_directory') ?>/assets/images/contacto.svg" alt=""></a>
                </li>

            </ul>
        </nav>
    </header>

<style type="text/css">
    


/**
 * Tooltip Styles
 */

/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: -270%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -70px;
  padding: 7px;
  width: 120px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
/*[data-tooltip]:after {
  position: absolute;
  bottom: 150%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid #000;
  border-top: 5px solid hsla(0, 0%, 20%, 0.9);
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}
*/
/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}
</style>
