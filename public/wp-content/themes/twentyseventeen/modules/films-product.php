<?php

function film_after_save( $post_id, $post ) {
    if (wp_is_post_revision( $post_id ) || $post->post_status == 'auto-draft') return true;
    if (get_post_type($post_id) == 'films'){
        $post_meta = get_post_meta($post_id, 'shop_item_id');

        return $post_meta && !empty($post_meta) ? wp_update_post(array(
            'ID'           => $post_meta[0],
            'post_title'   => get_the_title( $post_id ),
            'post_content' => get_the_excerpt( $post_id ),
        )) : update_post_meta( $post_id, 'shop_item_id', wp_insert_post(array(
            'post_title' => get_the_title( $post_id ),
            'post_content' => get_the_excerpt( $post_id ),
            'post_status' => 'publish',
            'post_type' => "product",
        )));
    }

    return true;
}

add_action( 'save_post', 'film_after_save', 10, 2 );

function manage_films_columns( $column ) {
    $column['store'] = 'Store';
    return $column;
}

add_filter( 'manage_films_posts_columns', 'manage_films_columns', 10, 2 );

function manage_films_columns_content( $column_name, $post_id ) {
    switch ($column_name) {
        case 'store' :
            $item_id = get_post_meta($post_id, 'shop_item_id'); ?>
            <a href="post.php?post=<?php echo $item_id[0]; ?>&action=edit">Edit As Shop Item</a>
            <?php break;
    }
    return true;
}

add_action('manage_films_posts_custom_column', 'manage_films_columns_content', 10, 2);

function trash_film( $post_id ) {
    $item_id = get_post_meta($post_id, 'shop_item_id');
    if (get_post_type($post_id) == 'films') wp_trash_post( $item_id[0] );
    return true;
}

add_action( 'wp_trash_post', 'trash_film' );

function delete_film( $post_id ) {
    $item_id = get_post_meta($post_id, 'shop_item_id');
    if (get_post_type($post_id) == 'films') wp_delete_post( $item_id[0], true );
    return true;
}

add_action( 'before_delete_post', 'delete_film' );
