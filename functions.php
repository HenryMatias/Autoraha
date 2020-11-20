<?php


    ////////////////////////////////////////////////////////////////
    ////////         adding the CSS and JS files         ///////////
    ////////////////////////////////////////////////////////////////

    function autoraha_setup() {
        wp_enqueue_style('google-fonts-lato', '//fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');
        wp_enqueue_script("fontawesome", 'https://kit.fontawesome.com/0c707c1c12.js');
        wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 'microtime()', 'all');
        wp_enqueue_style('styles'); 
        wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

        wp_enqueue_style('slick', get_theme_file_uri() . '/slick/slick.css');
        wp_enqueue_style('slick-style', get_theme_file_uri() . '/slick/slick-theme.css');
        wp_enqueue_script("slickslider", get_theme_file_uri('/js/slickslider.js'), NULL, '1.0.0', true);
        wp_enqueue_script("slick-js", get_theme_file_uri('/slick/slick.min.js'), NULL, '1.0.0', true);
        wp_enqueue_script("jquery", 'https://code.jquery.com/jquery-1.11.0.min.js');
        wp_enqueue_script("jquery-migrate", 'https://code.jquery.com/jquery-migrate-1.2.1.min.js');

        //Bootstrap
        wp_enqueue_style("bootstrap-stylesheet", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        wp_enqueue_script("bootstrap-jquery", 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
        wp_enqueue_script("bootstrap-popper", 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
        wp_enqueue_script("bootstrap-js", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');

        wp_enqueue_script("language-js", get_theme_file_uri('/js/language.js'), NULL, '1.0.0', true);
    }

    add_action('wp_enqueue_scripts', 'autoraha_setup');

    ////////////////////////////////////////////////////////////////
    ////////         adding thumbnail support            ///////////
    ////////////////////////////////////////////////////////////////

    function ar_init() {
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'ar_init');

    //////////////////////////////////////////////////////////
    ////////            adding menu support           ////////
    //////////////////////////////////////////////////////////

    function wpb_custom_new_menu() {
        register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
    }

    add_action( 'init', 'wpb_custom_new_menu' );

    ////////////////////////////////////////////////////////////////
    ////////            adding Ratings support           ///////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/ratings.php';

    ////////////////////////////////////////////////////////////////
    ////////    adding custom commercial support         ///////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/commercials.php';

    ////////////////////////////////////////////////////////////////
    ////////        adding custom offers support         ///////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/offers.php';

    ////////////////////////////////////////////////////////////////
    ////////     adding creditapplication support        ///////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/credit-application.php';

    ////////////////////////////////////////////////////////////////
    ///////////        adding content support           ////////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/text-images.php';

    ////////////////////////////////////////////////////////////////
    ///////////            application support          ////////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/application.php';

    ////////////////////////////////////////////////////////////////
    ///////////            breadcrumbs support          ////////////
    ////////////////////////////////////////////////////////////////

    include 'assets/php/breadcrumbs.php';