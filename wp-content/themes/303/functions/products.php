<?php

/* Add Recipes */
add_action('init', 'registerProducts');
function registerProducts()
{
    $labels = array(
        'name' => __('Producto'),
        'singular_name' => __('Productos'),
        'add_new' => __('Añadir Producto', 'Producto'),
        'add_new_item' => __('Añadir nuevo Producto'),
        'edit_item' => __('Editar Producto'),
        'new_item' => __('Nuevo Producto'),
        'view_item' => __('Ver Producto'),
        'search_items' => __('Buscar Producto'),
        'not_found' => __('No se han encontrado Productos'),
        'not_found_in_trash' => __('No se han encontrado Productos en la papelera'),
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
        'hierarchical' => fals,
        'menu_position' => null,
        'menu_icon'   => 'dashicons-welcome-widgets-menus',
        'supports' => array('title', 'editor', 'author', 'revisions', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
    );
    register_post_type('productos', $args);
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
    'new_item_name' => __('Nombre de la nuevo categoria'),
    'separate_items_with_commas' => __('Separar categoría por comas'),
    'add_or_remove_items' => __('Añadir o eliminar categoría'),
    'choose_from_most_used' => __('Escoger entre los categoría más utilizados')
);
register_taxonomy('categoria_p', array('productos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Categoria'),
));






/* Add field image category */
add_action( 'categoria_p_add_form_fields', 'producto_add_new_meta_fields', 10, 2 );
function producto_add_new_meta_fields(){
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
function producto_edit_meta_fields($term){
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
add_action( 'categoria_p_edit_form_fields', 'producto_edit_meta_fields', 10, 2 );
/* Save edit and create chef */
function producto_save_custom_meta( $term_id ) {
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
add_action( 'admin_enqueue_scripts', 'my_product_enqueue' );
function my_product_enqueue() {
    wp_enqueue_media();
    wp_enqueue_script( 'my_custom_script', themeDirUri . '/functions/admin.js' );
}
add_action( 'edited_categoria_p', 'producto_save_custom_meta', 10, 2 );
add_action( 'create_categoria_p', 'producto_save_custom_meta', 10, 2 );


/* Add boxes recipes */
add_action("add_meta_boxes", "value_metabox");
function value_metabox()
{
    add_meta_box(
        "p_values",
        "Valor",
        "box_values_print",
        "productos",
        "normal",
        "high"
    );
    
    add_meta_box(
        "p_column",
        "Columna",
        "box_column_print",
        "productos",
        "normal",
        "high"
    );
    add_meta_box(
        "p_position",
        "Posicion",
        "box_position_print",
        "productos",
        "normal",
        "high"
    );
    
}
function box_values_print()
{
    global $post;
    wp_nonce_field("udp_metabox_nonce", "udp_box_nonce");
    $meta = get_post_meta($post->ID, 'p_value', true);
    
    ?>
    <p>
        <label for="<?php echo 'p_value' ?>">Valor</label><br>
        <?php wp_editor($meta, 'p_value') ?>
    </p>

    <?php
}
function box_column_print()
{
    global $post;
    wp_nonce_field("udp_metabox_nonce", "udp_box_nonce");
    $meta = get_post_meta($post->ID, 'p_column', true);
    
    ?>
    <p>
        <label for="<?php echo 'p_column' ?>">Valor</label><br>
        <?php wp_editor($meta, 'p_column') ?>
    </p>

    <?php
}
function box_position_print()
{
    global $post;
    wp_nonce_field("udp_metabox_nonce", "udp_box_nonce");
    $meta = get_post_meta($post->ID, 'p_position', true);
    
    ?>
    <p>
        <label for="<?php echo 'p_position' ?>">Valor</label><br>
        <?php wp_editor($meta, 'p_position') ?>
    </p>

    <?php
}
/* Save Post */
add_action("save_post", "udp_save_metabox");
function udp_save_metabox($post_id)
{
    //si no lleva la variable post meta_box_nonce o no concuerda con udp_metabox_nonce salimos
    if (!isset($_POST["udp_box_nonce"]) || !wp_verify_nonce($_POST["udp_box_nonce"], "udp_metabox_nonce")) {
        return;
    }
    //si es un autoguardado salimos
    if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE) {
        return;
    }
    //si el usuario no tiene privilegios salimos
    if (!current_user_can("edit_post")) {
        return;
    }
    update_post_meta($post_id,'p_value', $_POST['p_value'] );
    update_post_meta($post_id,'p_column', $_POST['p_column'] );
    update_post_meta($post_id,'p_position', $_POST['p_position'] );
    
}