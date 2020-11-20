<?php

// This creates Custom Post Type for Commercials

function ar_commercial_custom_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('commercial',
        array(
            'rewrite'   => array('slug' => 'commercials'),
            'labels'    => array(
                'name'          => 'Mainospaikka',
                'singular_name' => 'Mainos',
                'add_new'       => 'Luo Mainos',
                'add_new_item'  => 'Uusi Mainos',
                'edit_item'     => 'Muokkaa Mainosta'
                ),
            'menu_icon'     => 'dashicons-megaphone',
            'public'        => true,
            'has_archive'   => true,
            'supports'      => array(
                'title', 'thumbnail',
            )
        )
    );
}
add_action('init', 'ar_commercial_custom_post_type');


?>