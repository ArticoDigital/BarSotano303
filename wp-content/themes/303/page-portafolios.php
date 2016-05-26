<?php get_header(); ?>
<?php global $post;
$my_query = new WP_Query('category_name=portafolios&showposts=100'); ?>
    <ul class="Portfolio row">
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <li class="col-4 cols-6 row ">
                <a href=" <?php echo get_permalink($post->ID) ?>">
                    <?php the_post_thumbnail(); ?>
                    <span> + </span>
                </a>

            </li>

        <?php endwhile; ?>
    </ul>
<?php get_footer(); ?>