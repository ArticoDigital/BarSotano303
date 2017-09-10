<?php
$category = get_query_var('cat_producto');

$cat_id = get_category_id($category,'categoria_p');

$children = get_terms( 'categoria_p', array( //Obtiene los hijos de la categoría
'parent'    => $cat_id,
'hide_empty' => false
) );
// uncomment to examine for debugging
if(count($children)==0){
    $children[] = get_term( $cat_id, 'categoria_p');
}

get_header();
?>
    <section class="Gallery">
        <div id="primary" class="content-area ">
            <div class="lista">
                <div class="tab">
                    <a href="/productos">Volver</a>
                    <ul class="tabs">
                        <?php
                        /*echo "<pre>";
                        print_r($children);
                        echo "</pre>";*/
                        foreach ($children as $wkey => $value) {
                           // echo $value->slug;
                            echo '<li><a href="#">'.$value->name.'</a></li>';
                                
                        }
                        ?>
                    </ul>
                    <div class="tab_content">
                        
                        <?php
                        foreach ($children as $wkey => $value) :
                            $category = $value->slug;
                        ?>         
                        
                        <div class="tabs_item">
                            <div class="row middle center"><img src="<?php print_r(get_option("taxonomy_" . $value->term_id)['imagen']); ?>" alt="" class="alignnone size-full wp-image-144"/></div>
                            <div class="row middle center">

                                <?php
                                //echo "<pre>";
                //print_r($children); 
                                $args = [
                                    'post_type' => 'productos',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'categoria_p',
                                            'field' => 'slug',
                                            'terms' => $category,
                                        ]
                                    ]
                                    ,'orderby'   => 'meta_value_num'
                                    ,'meta_key'  => 'p_position'
                                    , 'order' => 'ASC',
                                    'meta_query' => [
                                        [
                                            'key'     => 'p_column',
                                            'value'   => [1],
                                            'compare' => 'IN',
                                        ]
                                    ],];
                                $query = new WP_Query($args);
                                $args2 = [
                                    'post_type' => 'productos',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'categoria_p',
                                            'field' => 'slug',
                                            'terms' => $category,
                                        ]
                                    ]
                                    ,'orderby'   => 'meta_value_num'
                                    ,'meta_key'  => 'p_position'
                                    , 'order' => 'ASC',
                                    'meta_query' => [
                                        [
                                            'key'     => 'p_column',
                                            'value'   => [2],
                                            'compare' => 'IN',
                                        ]
                                    ],];
                                $query2 = new WP_Query($args2);
                                $args3 = [
                                    'post_type' => 'productos',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'categoria_p',
                                            'field' => 'slug',
                                            'terms' => $category,
                                        ]
                                    ]
                                    ,'orderby'   => 'meta_value_num'
                                    ,'meta_key'  => 'p_position'
                                    , 'order' => 'ASC',
                                    'meta_query' => [
                                        [
                                            'key'     => 'p_column',
                                            'value'   => [3],
                                            'compare' => 'IN',
                                        ]
                                    ],];
                                $query3 = new WP_Query($args3);
                                ?>
                                <?php if ($query->have_posts()):?>
                                <div class="col-4 small-12 medium-6 middle center itemfood">
                                    <?php
                                        while ($query->have_posts()) : $query->the_post(); ?>
                                          
                                          <img src="<?php the_post_thumbnail_url(); ?>" class="alignnone wp-image-145" />     
                                            <div class="row between"><span><?php echo the_title();?></span><span>$<?php echo strip_tags(get_post_meta($post->ID, 'p_value', true)); ?></span></div>
                                            <div class="item_desc"><?php $contenstring=get_the_content(); echo strip_tags($contenstring, '<p> <a>');  ?></div>
                                            
                                        <?php endwhile; ?>
                                </div>
                                <?php endif;?>
                                <?php if ($query2->have_posts()):?>
                                <div class="col-4 small-12 medium-6 middle center itemfood">
                                    <?php
                                        while ($query2->have_posts()) : $query2->the_post(); ?>
                                          
                                          <img src="<?php the_post_thumbnail_url(); ?>" class="alignnone wp-image-145" />     
                                            <div class="row between"><span><?php echo the_title();?></span><span>$<?php echo strip_tags(get_post_meta($post->ID, 'p_value', true)); ?></span></div>
                                            <div class="item_desc"><?php $contenstring=get_the_content(); echo strip_tags($contenstring, '<p> <a>');  ?></div>
                                            
                                        <?php endwhile; ?>
                                </div>
                                <?php endif;?>
                                
                                <?php if ($query3->have_posts()):?>
                                <div class="col-4 small-12 medium-6 middle center itemfood">
                                    <?php
                                        while ($query3->have_posts()) : $query3->the_post(); ?>
                                          
                                          <img src="<?php the_post_thumbnail_url(); ?>" class="alignnone wp-image-145" />     
                                            <div class="row between"><span><?php echo the_title();?></span><span>$<?php echo strip_tags(get_post_meta($post->ID, 'p_value', true)); ?></span></div>
                                            <div class="item_desc"><?php $contenstring=get_the_content(); echo strip_tags($contenstring, '<p> <a>');  ?></div>
                                            
                                        <?php endwhile; ?>
                                </div>
                                <?php endif;?>
                       
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
<?php get_footer(); ?>