<?php
add_action('init', function() {
    register_post_type( 'films',
        array(
            'labels' => array(
                'name' => __( 'Films' ),
                'singular_name' => __( 'Films' ),
                'postexcerpt' => __( 'Films' ),
            ),
            'public' => true,
            'supports' => array(
                'title',
                'revisions',
                'editor',
                'thumbnail',
            ),
            'taxonomies' => array('category'),
        )
    );
});

add_action('add_meta_boxes', function(){
    add_meta_box('postexcerpt', __('Description'), 'post_excerpt_meta_box', 'films', 'side');
});
