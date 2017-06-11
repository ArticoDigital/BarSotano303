<?php
$category = get_query_var('cat_producto');
get_header();
?>
    <section class="Gallery">
        <div id="primary" class="Gallery-content">
            <h3><?php  echo str_replace("-", " ", $category) ?></h3>
            <?php
            $args = [
                'post_type' => 'productos',
                'tax_query' => [
                    [
                        'taxonomy' => 'categoria_p',
                        'field' => 'slug',
                        'terms' => $category,
                    ]
                ]
                , 'order' => 'DESC',];
            $query = new WP_Query($args);
            ?>
            <div class="m-p-g">
                <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
                    <?php
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" data-full="<?php the_post_thumbnail_url(); ?>"
                             class="m-p-g__thumbs-img"/>
                    <?php endwhile; ?>
                </div>
                <div class="m-p-g__fullscreen"></div>
            </div>
        </div>
    </section>
<?php
wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/material-photo-gallery.min.js');
wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/material-photo-gallery.css'); ?>
    <script>
        var elem = document.querySelector('.m-p-g');
        document.addEventListener('DOMContentLoaded', function () {
            var gallery = new MaterialPhotoGallery(elem);
        });
    </script>
<?php get_footer(); ?>