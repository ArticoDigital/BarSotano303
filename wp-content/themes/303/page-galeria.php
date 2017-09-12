<?php get_header(); ?>
    <section class="Galleries">
        <div id="primary" class="content-area   row ">


            <div class="owl-carousel owl-theme">
                <?php
                $terms = get_terms("categoria", array("hide_empty" => false));
                foreach ($terms as $cat) : $nameChef = explode(" ", $cat->name) ?>
                    <figure class="col-12 small-12" data-filter=".<?php echo $cat->slug ?>">
                        <h3><?php echo $cat->name ?></h3>
                        <a href="/galeria/<?php echo $cat->slug ?>"><img src="<?php print_r(get_option("taxonomy_" . $cat->term_id)['imagen']); ?>" alt=""></a>
                        <p class="Recipes-chefsDescription"><?php print_r($cat->description) ?></p>
                        <a class="Galleries-link" href="/galeria/<?php echo $cat->slug ?>">Ver galeria <span>→</span></a>
                    </figure> <?php endforeach ?>
            </div>

        </div>
    </section>



<?php
wp_enqueue_script( 'owl',  'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js', array('jquery'), '1.0.0', true );
wp_enqueue_style( 'slider1', 'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css',false,'1.1','all');
?>

<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            items: 1,
            loop: true
        });
    });
</script>
