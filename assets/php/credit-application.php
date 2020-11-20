<?php

// Credit Application Custom Post Type

function ar_luottohakemus_custom_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('application',
        array(
            'rewrite'   => array('slug' => 'applications'),
            'labels'    => array(
                'name'          => 'Hakemukset',
                'singular_name' => 'Hakemus',
                'add_new'       => 'Luo Hakemus',
                'add_new_item'  => 'Uusi Hakemus',
                'edit_item'     => 'Muokkaa Hakemusta'
                ),
            'menu_icon'     => 'dashicons-welcome-write-blog',
            'public'        => true,
            'has_archive'   => true,
            'supports'      => array(
                'title', 'thumbnail',
            )
        )
    );
}
add_action('init', 'ar_luottohakemus_custom_post_type');

// Sending Form to Custom Post Type

if(isset($_POST['etunimi'])) {

    add_theme_support( 'post-thumbnails', array('application'));

    $my_post = array(
        'post_type'     => 'application',
        'post_title'    => $_POST['sukunimi']. ' '.$_POST['sukunimi'],
        'post_status'   => 'private',
        );
    
    $post_id = wp_insert_post($my_post);
    
    // Save custom fields data
    // Henkilötiedot
    $field_key = "etunimi";
    $value = $_POST['etunimi'];
    update_field( $field_key, $value, $post_id );

    $field_key = "sukunimi";
    $value = $_POST['sukunimi'];
    update_field( $field_key, $value, $post_id );

    $field_key = "henkilotunnus";
    $value = $_POST['henkilotunnus'];
    update_field( $field_key, $value, $post_id );

    $field_key = "osoite";
    $value = $_POST['osoite'];
    update_field( $field_key, $value, $post_id );

    $field_key = "kaupunki";
    $value = $_POST['kaupunki'];
    update_field( $field_key, $value, $post_id );

    $field_key = "postinumero";
    $value = $_POST['postinumero'];
    update_field( $field_key, $value, $post_id );

    $field_key = "sahkopostiosoite";
    $value = $_POST['sahkopostiosoite'];
    update_field( $field_key, $value, $post_id );

    $field_key = "puhelinnumero";
    $value = $_POST['puhelinnumero'];
    update_field( $field_key, $value, $post_id );



    // Ajoneuvontiedot
    $field_key = "kohteen_hinta";
    $value = $_POST['kohteenhinta'];
    update_field( $field_key, $value, $post_id );

    $field_key = "rekisterinumero";
    $value = $_POST['rekisterinumero'];
    update_field( $field_key, $value, $post_id );

    $field_key = "merkki";
    $value = $_POST['merkki'];
    update_field( $field_key, $value, $post_id );

    $field_key = "malli";
    $value = $_POST['malli'];
    update_field( $field_key, $value, $post_id );

    $field_key = "mittarilukema";
    $value = $_POST['mittarilukema'];
    update_field( $field_key, $value, $post_id );

    $field_key = "ajoneuvoluokka";
    $value = $_POST['ajoneuvoluokka'];
    update_field( $field_key, $value, $post_id );

    $field_key = "rekisterointi_maa";
    $value = $_POST['rekmaa'];
    update_field( $field_key, $value, $post_id );

    $field_key = "kayttoonottopaiva";
    $value = $_POST['kaytottopvm'];
    update_field( $field_key, $value, $post_id );

    $field_key = "kayttotarkoitus";
    $value = $_POST['kayttotarkoitus'];
    update_field( $field_key, $value, $post_id );



    // Lisätiedot
    $field_key = "tyosuhde";
    $value = $_POST['tyopaikka'];
    update_field( $field_key, $value, $post_id );

    $field_key = "asumismuoto";
    $value = $_POST['asumismuoto'];
    update_field( $field_key, $value, $post_id );

    $field_key = "ammatti";
    $value = $_POST['ammatti'];
    update_field( $field_key, $value, $post_id );

    var_dump($value);

    $field_key = "tyonantaja";
    $value = $_POST['tyonanataja'];
    update_field( $field_key, $value, $post_id );

    $field_key = "vuositulot";
    $value = $_POST['vuositulot'];
    update_field( $field_key, $value, $post_id );

    $field_key = "tunnistusasiakirja";
    $value = $_POST['asiakirja'];
    update_field( $field_key, $value, $post_id );

    $field_key = "ajokortin_numero";
    $value = $_POST['ajokortinnumero'];
    update_field( $field_key, $value, $post_id );

    $field_key = "asiakirjan_myontaja";
    $value = $_POST['myontaja'];
    update_field( $field_key, $value, $post_id );



    //Rahoituksen tiedot
    $field_key = "luottoaika";
    $value = $_POST['luottoaika'];
    update_field( $field_key, $value, $post_id );
    
    $field_key = "kasiraha";
    $value = $_POST['kasiraha'];
    update_field( $field_key, $value, $post_id );
    
    $field_key = "poikkeava";
    $value = $_POST['poikviimera'];
    update_field( $field_key, $value, $post_id );

    $field_key = "poliittinen";
    $value = $_POST['vaikutus'];
    update_field( $field_key, $value, $post_id );

    $field_key = "kunnossapitoturva";
    $value = $_POST['kunnossapitoturva'];
    update_field( $field_key, $value, $post_id );

    $field_key = "hakemuksen_vaihe";
    $value = 'Uusi Hakemus';
    update_field( $field_key, $value, $post_id );

    $field_key = "hakemuksen_vaihe_vari";
    $value = 'success';
    update_field( $field_key, $value, $post_id );


    $daytime = date('d.m.Y-H:i', time() + 3 * 60 * 60);
    $rowuusihakemus = array(
        'muokkaaja' => $_POST['sukunimi'],
        'raportti'  => 'Uusi Hakemus',
        'aika'   => $daytime,
    );
    
    add_row('muokkaus_historia', $rowuusihakemus, $post_id);

    
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
    
        header("Location:http://autoraha.local");
    
    die;
}

?>