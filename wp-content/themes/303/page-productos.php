<?php get_header(); ?>
    <section class="Galleries">
        <div id="primary" class="content-area   row ">
            <?php
            $terms = get_terms("categoria_p", array("hide_empty" => false));
            foreach ($terms as $cat) : $nameChef = explode(" ", $cat->name) ?>
            <figure class="col-4 small-12" data-filter=".<?php echo $cat->slug ?>">
                <h3><?php echo $cat->name ?></h3>
                <a href="/producto/<?php echo $cat->slug ?>"><img src="<?php print_r(get_option("taxonomy_" . $cat->term_id)['imagen']); ?>" alt=""></a>
                <p class="Recipes-chefsDescription"><?php print_r($cat->description) ?></p>
                <a class="Galleries-link" href="/producto/<?php echo $cat->slug ?>">Ver productos <span>→</span></a>
            </figure> <?php endforeach ?>

        </div>
    </section>

<?php get_footer(); ?>