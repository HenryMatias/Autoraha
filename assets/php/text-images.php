<?php

// Text and Images

function ar_sisalto_custom_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('content',
        array(
            'rewrite'   => array('slug' => 'contents'),
            'labels'    => array(
                'name'          => 'Tekstit & Kuvat',
                'singular_name' => 'Tekstit & Kuvat',
                'edit_item'     => 'Muokkaa tekstejä ja kuvia'
                ),
            'menu_icon'     => 'dashicons-welcome-add-page',
            'public'        => true,
            'has_archive'   => true,
            'supports'      => array(
                'title', 'thumbnail',
            )
        )
    );
}
add_action('init', 'ar_sisalto_custom_post_type');

?>