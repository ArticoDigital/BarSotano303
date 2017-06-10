<?php

/* Add Recipes */
add_action('init', 'registerGallery');
function registerGallery()
{
    $labels = array(
        'name' => __('Galeria'),
        'singular_name' => __('Galerias'),
        'add_new' => __('Añadir galeria', 'galeria'),
        'add_new_item' => __('Añadir nueva galeria'),
        'edit_item' => __('Editar galeria'),
        'new_item' => __('Nueva galeria'),
        'view_item' => __('Ver galeria'),
        'search_items' => __('Buscar galeria'),
        'not_found' => __('No se han encontrado galeria'),
        'not_found_in_trash' => __('No se han encontrado galeria en la papelera'),
        'parent_item_colon' => '',
    );
    //  $args
    $args = array('labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon'   => 'dashicons-format-gallery',
        'supports' => array('title', 'editor', 'author', 'revisions', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
    );
    register_post_type('galerias', $args);
}

$labels = array(
    'name' => __('Categorías'),
    'singular_name' => __('Categorías'),
    'search_items' => __('Buscar categorías'),
    'popular_items' => __('Categorías populares'),
    'all_items' => __('Todos las categorías'),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __('Editar categoría'),
    'update_item' => __('Actualizar Temario'),
    'add_new_item' => __('Añadir nuevo categoría'),
    'new_item_name' => __('Nombre del nuevo categoria'),
    'separate_items_with_commas' => __('Separar categoría por comas'),
    'add_or_remove_items' => __('Añadir o eliminar categoría'),
    'choose_from_most_used' => __('Escoger entre los categoría más utilizados')
);
register_taxonomy('categoria', array('galerias'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Categoria'),
));






/* Add field image category */
add_action( 'categoria_add_form_fields', 'categoria_add_new_meta_fields', 10, 2 );
function categoria_add_new_meta_fields(){
    ?>
    <div>
        <label for="term_meta[imagen]">
            <input type="text" name="term_meta[imagen]" size="36" id="upload_image" value=""><br>
            <input id="upload_image_button" type="button" class='button button-primary' value="Subir Imagen" />
            <br/><i>Introduce una URL o establece una imagen para este campo.</i>
        </label>
    </div>
    <?php
}
/* Add field in edit chef  */
function categoria_edit_meta_fields($term){
    $t_id = $term->term_id;
    $term_meta = get_option("taxonomy_$t_id");
    ?>
    <tr valign="top" class='form-field'>
        <th scope="row">Subir imagen</th>
        <td>
            <label for="upload_image">
                <input id="upload_image" type="text" size="36" name="term_meta[imagen]" value="<?php if( esc_attr( $term_meta['imagen'] ) != "") echo esc_attr( $term_meta['imagen'] ) ; ?>" />
                <p><input id="upload_image_button" type="button" class='button button-primary' style='width: 100px' value="Subir Imagen" />
                    <i>Introduce una URL o establece una imagen para este campo.</i></p>
            </label>
            <p><?php if( esc_attr( $term_meta['imagen'] ) != "" ) echo "<table><tr><td><i><strong>Imagen actual</strong></i>:</td><td> <img src='".esc_attr( $term_meta['imagen'] )."'></td></tr></table>"; ?></p>
        </td>
    </tr>
    <?php
}
add_action( 'categoria_edit_form_fields', 'categoria_edit_meta_fields', 10, 2 );
/* Save edit and create chef */
function categoria_save_custom_meta( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ) {
            if ( isset ( $_POST['term_meta'][$key] ) ) {
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        update_option( "taxonomy_$t_id", $term_meta );
    }
}
/* Add script image  */
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function my_enqueue() {
    wp_enqueue_media();
    wp_enqueue_script( 'my_custom_script', themeDirUri . '/functions/admin.js' );
}
add_action( 'edited_categoria', 'categoria_save_custom_meta', 10, 2 );
add_action( 'create_categoria', 'categoria_save_custom_meta', 10, 2 );