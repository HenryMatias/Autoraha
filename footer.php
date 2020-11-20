<footer>
<img id="footer-background" src="<?php echo get_template_directory_uri(); ?>/images/footerBackground.png" alt="">
<img id="footer-mobile-background" src="<?php echo get_template_directory_uri(); ?>/images/footerMobileBackground.png" alt="">
<img id="footer-mobile-background-2" src="<?php echo get_template_directory_uri(); ?>/images/footerMobileBackground2.png" alt="">
    <div class="logoarea">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/ARwhite.png" alt="">
    </div>

        <?php 
            $args = array(
            'post_type' => 'content',
            'posts_per_page' => 1,
            );
            $contents = new WP_Query($args);
            while ($contents->have_posts()) {
            $contents->the_post();
        ?>

    <div class="row">
        <div class="col-lg-3">
            <div class="content-contact-information">
                <p class="footerheading"><?php echo get_field('ota_yhteytta'); ?></p>
                <p class="secondheading"><?php echo get_field('puhelin'); ?>: <?php echo get_field('puhelinnumero'); ?></p>
                <p class="secondheading"><?php echo get_field('sahkoposti'); ?>: <?php echo get_field('sahkopostiosoite'); ?></p>
            </div>
        </div>
        <div class="col-md-3">
            <p class="footerheading"><?php echo get_field('yritys'); ?></p>
            <a href=""><?php echo get_field('yritys_1'); ?></a>
            <a href=""><?php echo get_field('yritys_2'); ?></a>
            <a href=""><?php echo get_field('yritys_3'); ?></a>
            <a href=""><?php echo get_field('yritys_4'); ?></a>
            <a href=""><?php echo get_field('yritys_5'); ?></a>
        </div>
        <div class="col-md-3">
            <p class="footerheading"><?php echo get_field('valikko'); ?></p>
            <a href=""><?php echo get_field('valikko_footer_1'); ?></a>
            <a href=""><?php echo get_field('valikko_footer_2'); ?></a>
            <a href=""><?php echo get_field('valikko_footer_3'); ?>s</a>
            <a href=""><?php echo get_field('valikko_footer_4'); ?></a>
            <a href=""><?php echo get_field('valikko_footer_5'); ?></a>
        </div>
        <div class="col-lg-3">
            <div class="content-newsletter">
                <p class="footerheading"><?php echo get_field('tilaa_uutiskirje'); ?></p>
                <form class="followinput">
                    <input id="followfield" type="email" placeholder="<?php echo get_field('sahkopostiosoite_placeholder'); ?>">
                    <input id="followsend" type="button" value="<?php echo get_field('sahkopostiosoite_laheta'); ?>">
                </form>
                <div class="followsocial">
                    <a href="<?php echo get_field('facebook_url'); ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo get_field('twitter_url'); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?php echo get_field('google_plus_url'); ?>">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="<?php echo get_field('instagram_url'); ?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

        <?php }
            wp_reset_query();
        ?>

    <div class="terms">
        <p>&#169; 2020 <span>eConnect Development Oy</span>. Kaikki oikeudet pidätetään.</p>
    </div>
</footer>

    <?php wp_footer(); ?>

</body>
</html>