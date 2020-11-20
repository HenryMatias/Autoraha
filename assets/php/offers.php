<?php

// Custom Post Type for offers

function ar_offer_custom_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('offer',
        array(
            'rewrite'   => array('slug' => 'offers'),
            'labels'    => array(
                'name'          => 'Tarjoukset',
                'singular_name' => 'Tarjous',
                'add_new'       => 'Luo Tarjous',
                'add_new_item'  => 'Uusi Tarjous',
                'edit_item'     => 'Muokkaa Tarjousta'
                ),
            'menu_icon'     => 'dashicons-cart',
            'public'        => true,
            'has_archive'   => true,
            'supports'      => array(
                'title', 'thumbnail',
            )
        )
    );
}
add_action('init', 'ar_offer_custom_post_type');

?>