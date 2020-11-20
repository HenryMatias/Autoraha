<?php

// This creates Custom Post Type for Ratings

function ar_rates_custom_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('project',
        array(
            'rewrite'   => array('slug' => 'projects'),
            'labels'    => array(
                'name'          => 'Arvostelut',
                'singular_name' => 'Arvostelu',
                'add_new'       => 'Luo Arvostelu',
                'new_item'      => 'Uusi Arvostelu',
                'edit_item'     => 'Muokkaa arvostelua'
                ),
            'menu_icon'     => 'dashicons-format-chat',
            'public'        => true,
            'has_archive'   => true,
            'supports'      => array(
                'title', 'thumbnail',
            )
        )
    );
}
add_action('init', 'ar_rates_custom_post_type');

// This send data to Ratings

if(isset($_POST['name'])) {

    add_theme_support( 'post-thumbnails', array('project'));

    $my_post = array(
        'post_type'     => 'project',
        'post_title'    => $_POST['name'],
        'post_status'   => 'pending',
        );
    
    $post_id = wp_insert_post($my_post);
    
    // Save custom fields data
    $field_key = "arvostelijan_nimi";
    $value = $_POST['name'];
    update_field( $field_key, $value, $post_id );
    
    $field_key = "arvostelijan_sahkoposti";
    $value = $_POST['rateemail'];
    update_field( $field_key, $value, $post_id );
    
    $field_key = "arvostelijan_ammatti";
    $value = $_POST['rateoccupation'];
    update_field( $field_key, $value, $post_id );

    $field_key = "kommentti";
    $value = $_POST['ratecomment'];
    update_field( $field_key, $value, $post_id );

    $field_key = "arvostelijan_arvosana";
    $value = $_POST['ratevalue'];
    update_field( $field_key, $value, $post_id );
    
    if(!function_exists('wp_generate_attachement_metadata')) {
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
        if ($_FILES) {
            foreach ($_FILES as $file => $array) {
                if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                    return "upload error : " . $_FILES[$file]['error'];
                }
                $attach_id = media_handle_upload( $file, $post_id);
            }
        }
        if ($attach_id > 0) {
            update_post_meta($post_id,'_thumbnail_id',$attach_id);
        }
    
        header("Location:https://autoraha.fi");
    
    die;
}

?>