<header id="header-application">
<?php 
    $args = array(
    'post_type' => 'content',
    'posts_per_page' => 1,
    );
    $contents = new WP_Query($args);
    while ($contents->have_posts()) {
    $contents->the_post();
?>

<div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/navArLogo.png" alt="Autoraha logo">
    <div class="nav-contact">
        <ul class="contact-information">
            <div class="contact-buttons">
                <i class="fas fa-phone"></i>
                <li>010 3364 111</li>
            </div>
            <div class="contact-buttons">
                <i class="fas fa-envelope"></i>
                <li>info@autoraha.fi</li>
            </div>
            <div class="contact-buttons">
                <i class="fas fa-globe"></i>
                <li id="kieli" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo get_field('kieli'); ?></li>
                <i id="down_symbol" class="fas fa-chevron-down"></i>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    wp_nav_menu( array( 
                    'theme_location' => 'my-custom-menu', 
                    'container_class' => 'custom-menu-class' ) ); 
                    ?>
                </div>
            </div>
        </ul>
    </div>

    <nav class="navbar navbar-expand-sm" id="nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a id="etusivu" class="nav-link" href="<?php echo get_field('valikko_1'); ?>"><?php echo get_field('valikko_1'); ?></a>
            </li>
            <li class="nav-item">
                <a id="palvelu" class="nav-link" href="about"><?php echo get_field('valikko_2'); ?></a>
            </li>
            <li class="nav-item">
                <a id="oppaat" class="nav-link" href="contact"><?php echo get_field('valikko_3'); ?></a>
            </li>
            <li class="nav-item">
                <a id="kysymykset" class="nav-link" href="contact"><?php echo get_field('valikko_4'); ?></a>
            </li>
            <li class="nav-item">
                <a id="tuonti" class="nav-link" href="contact"><?php echo get_field('valikko_5'); ?></a>
            </li>
            <li class="nav-item">
                <a id="yhteys" class="nav-link" href="contact"><?php echo get_field('valikko_6'); ?></a>
            </li>
        </ul>
    </nav>
</div>

<?php }
    wp_reset_query();
?>
</header>
<?php the_breadcrumb(); ?>