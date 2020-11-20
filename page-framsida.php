<?php get_header(); ?>

<div class="container">

        <?php 
            $args = array(
            'post_type' => 'content',
            'posts_per_page' => 1,
            );
            $contents = new WP_Query($args);
            while ($contents->have_posts()) {
            $contents->the_post();
        ?>
        <img id="container-logo" src="<?php echo get_template_directory_uri(); ?>/images/navArLogo.png" alt="Autoraha logo">

        <div class="first-section">
            <div class="content">
                <p id="slogan"><?php echo get_field('slogan'); ?></p>
                <h1 id="ensimmainen_otsikko">AUTO<span>RAHA</span></h1>
                <p id="alaotsikko"><?php echo get_field('mainosteksti'); ?> <span id="otsikkospan"><?php echo get_field('mainosteksti_luku'); ?></span></p>
                <li>
                    <a id="ctabutton" href="<?php echo get_field('cta_url_luottohakemukseen'); ?>"><?php echo get_field('cta'); ?></a>
                </li>
            </div>
        </div>



        <div class="second-section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/coverAR.png" alt="Autoraha autorahoitus" id="second-section-img">
            <div class="content">
                <p id="lyhyestieka"><?php echo get_field('autoraha_otsikko_ylaosa'); ?></p>
                <h2 id="lyhyestitoka"><?php echo get_field('autoraha_otsikko_alaosa'); ?></h2>
                <p id="lyhyestiselitys"><?php echo get_field('autoraha-leipateksti'); ?></p>
            </div>
        </div>



        <div class="container third-section">
            <div class="four-phases">
                <p><?php echo get_field('slogan_osio_3'); ?></p>
                <h2><?php echo get_field('ala_slogan_vasen'); ?><span> <?php echo get_field('ala_slogan_oikea'); ?></span></h2>
            </div>

            <div class="phases">
                <nav class="nav nav-pills nav-justified">
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-luottohakemus">1. <?php echo get_field('ensimmainen_osio_otsikko'); ?></a>
                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-kuntotarkastus">2. <?php echo get_field('toinen_osio_otsikko'); ?></a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-ajanvaraus">3. <?php echo get_field('kolmas_osio_otsikko'); ?></a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-kaupanteko">4. <?php echo get_field('neljas_osio_otsikko'); ?></a>
                  </nav>
            </div>

            <div class="tab-content container" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-luottohakemus" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="phase-number">
                                <p class="phase-numbers">1.</p>
                            </div>
                            <h3><?php echo get_field('ensimmainen_osio_otsikko'); ?></h3>
                            <p class="phase-text"><?php echo get_field('ensimmainen_osio_leipateksti'); ?></p>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-kuntotarkastus" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="phase-number">
                                <p class="phase-numbers">2.</p>
                            </div>
                            <h3><?php echo get_field('toinen_osio_otsikko'); ?></h3>
                            <p class="phase-text"><?php echo get_field('toinen_osio_leipateksti'); ?></p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/coverAR3.png" alt="autorahoitus kuntotarkastus" id="phase2img">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ajanvaraus" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="phase-number">
                                <p class="phase-numbers">3.</p>
                            </div>
                            <h3><?php echo get_field('kolmas_osio_otsikko'); ?></h3>
                            <p class="phase-text"><?php echo get_field('kolmas_osio_leipateksti'); ?></p>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-kaupanteko" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="phase-number">
                                <p class="phase-numbers">4.</p>
                            </div>
                            <h3><?php echo get_field('neljas_osio_otsikko'); ?></h3>
                            <p class="phase-text"><?php echo get_field('neljas_osio_leipateksti'); ?></p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/coverAR4.png" alt="autorahoitus kaupanteko" id="phase4img">
                        </div>
                    </div>
                </div>
              </div>
            </div>

        <div class="fourth-section">
            <div class="fourth-heading">
                <p><?php echo get_field('slogan_osio_4'); ?></p>
                <h2><?php echo get_field('vasen_alempi_slogan'); ?><span> <?php echo get_field('oikea_alempi_slogan'); ?></span></h2>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/coverAR5.png" alt="laske sopiva autolaina">
                </div>
                <div class="col-lg-7">
                    <h3><?php echo get_field('autolainan_kuvaus_otsikko'); ?></h3>
                    <p><?php echo get_field('autolainan_kuvaus_leipateksti'); ?></p>
                    <h3><?php echo get_field('autolainan_esimerkkilaskelma_otsikko'); ?></h3>
                    <p><?php echo get_field('autolainan_esimerkkilaskelma_leipateksti'); ?></p>
                </div>
            </div>
        </div>

        <div class="fifth-section">
            <img id="calcImage" src="<?php echo get_template_directory_uri(); ?>/images/calculator.png" alt="">
            <img id="dealImage" src="<?php echo get_template_directory_uri(); ?>/images/coverAR6.png" alt="">
            <div class="row">
                <div class="col-lg-6 calculator-details">
                    <div class="content-box">
                        <div class="content">
                            <h2><?php echo get_field('laskurin_otsikko'); ?></h2>
                            <form>
                                <div id="amounts">
                                    <label for="count"><?php echo get_field('lainasumman_label'); ?></label>
                                    <input type="text" value="10000€" id="count">
                                    <button type="button" id="minus" onclick="doMinus()">-</button>
                                    <button type="button" id="plus" onclick="doPlus()">+</button>
                                    <p><?php echo get_field('lainasumman_label_ala'); ?></p>
                                </div>
                                <script>
                                    var number = 10000;
                                    var amount = document.getElementById("count");
                                    function doPlus(){
                                        number = number + 1000;
                                        amount.value = number + "€";
                                    }
                                    function doMinus(){
                                    if (number > 10000) {
                                        number = number - 1000;
                                        amount.value = number + "€";
                                        }  
                                    }
                                </script>
                                <div id="months">
                                    <div class="range-value" id="rangeV"></div>
                                    <label for="month"><?php echo get_field('laina-ajan_otsikko'); ?></label>
                                    <input type="range" id="month" name="month" min="12" max="60"> 
                                </div>
                            <script>
                                const
                                    range = document.getElementById('month'),
                                    rangeV = document.getElementById('rangeV'),
                                    setValue = ()=>{
                                        const
                                            newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
                                            newPosition = 0 - (newValue * 0.2);
                                        rangeV.innerHTML = `<span>${range.value}</span>`;
                                        rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
                                    };
                                    document.addEventListener("DOMContentLoaded", setValue);
                                    range.addEventListener('input', setValue);
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 calculator-box">
                    <div class="loan-box">
                        <div class="monthly-payment-box">
                            <p><?php echo get_field('kuukausiera'); ?></p>
                            <div>
                                <input type="text" value="304" id="result" name="result">
                                <p id="eurosign">€</p>
                                <p id="monthssign"><?php echo get_field('kuukauden_lyhenne'); ?></p>
                            </div>
                        </div>
                        <div class="all-payment-box">
                            <div class="ratevalues">
                                <div class="loanamount">
                                    <p><?php echo get_field('laina_summa'); ?></p>
                                    <input type="text" value="10000€" id="resloan">
                                </div>
                                <div class="termsamount">
                                    <p><?php echo get_field('laina-aika'); ?></p>
                                    <input type="text" value="36 <?php echo get_field('kuukauden_lyhenne'); ?>" id="resmonth">
                                </div>
                                <div class="rateamount">
                                    <p><?php echo get_field('korko'); ?></p>
                                    <input type="text" value="1,89%">
                                </div>
                            </div>
                            <input id="count-rate" type="button" name="laskuri" value="<?php echo get_field('laskurin_painike'); ?>" onclick="calc(this.form)">
                            <p><?php echo get_field('laskurin_ehdot'); ?></p>
                            <a href=""><?php echo get_field('linkki_laajempaan_laskuriin'); ?></a>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>

        <?php }
            wp_reset_query();
        ?>

        <div class="sixth-section">

            <?php 
                $args = array(
                'post_type' => 'commercial',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'ASC',
                );
                $commercials = new WP_Query($args);
                while ($commercials->have_posts()) {
                $commercials->the_post();
            ?>
                
                <div class="comBack">
                <a href="<?php echo get_field('mainoksen_linkki'); ?>" target="_blank">
                    <img src="<?php echo get_field('mainoksen_kuva'); ?>" alt="">
                </a>
                </div>
                
            <?php }
            wp_reset_query();
            ?>
            
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

        <div class="seventh-section">
            <div class="row">
                <div class="col-md-6">
                    <h3><?php echo get_field('nouto_otsikko'); ?></h3>
                    <p><?php echo get_field('nouto_leipateksti'); ?></p>
                </div>
                <div class="col-md-6">
                    <div class="help-contact">
                        <div>
                            <a href="<?php echo get_field('noudon_url'); ?>" target="_blank"><i class="fas fa-store-alt"></i></a>
                            <p><?php echo get_field('noudon_verkkosivut'); ?></p>
                        </div>
                        <div>
                            <i class="fas fa-mobile-alt"></i>
                            <p><?php echo get_field('noudon_puhelinnumero'); ?></p>
                        </div>
                        <div>
                            <i class="far fa-thumbs-up"></i>
                            <p><?php echo get_field('noudon_suositus'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3><?php echo get_field('mainoslinkkien_otsikko'); ?></h3>
            </div>

            <?php }
                wp_reset_query();
            ?>

            <div class="row" id="helplinks">

            <?php 
                $args = array(
                'post_type' => 'offer',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'ASC',
                );
                $offers = new WP_Query($args);
                while ($offers->have_posts()) {
                $offers->the_post();
            ?>

                <div class="col-md-4">
                    <img src="<?php echo get_field('kuva'); ?>">
                    <h4><?php echo get_field('otsikko'); ?></h4>
                    <p><?php echo get_field('leipateksti'); ?></p>
                    <a target="_blank" href="<?php echo get_field('url'); ?>"><?php echo get_field('cta'); ?></a>
                </div>

            <?php }
                wp_reset_query();
            ?>

            </div>
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

        <div class="eight-section">
            <h3><?php echo get_field('turvalliset_kaupat_otsikko'); ?></h3>
            <p><?php echo get_field('turvalliset_kaupat_leipateksti'); ?></p>
            <button href=""><?php echo get_field('turvalliset_kaupat_cta'); ?></button>
        </div>
        <div id="ratesintro">
                <span><?php echo get_field('arvostelu_ylaotsikko'); ?></span>
                <h4><?php echo get_field('arvostelu_alaotsikko'); ?></h4>
            </div>
        <div class="ninth-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/coverAR11.png')">
            <div class="rates">
                <button id="openmodal" data-toggle="modal" data-target="#exampleModal"><?php echo get_field('arvostelu_cta'); ?><i class="fas fa-arrow-right"></i></button>
                <div class="your-class">

                <?php }
                    wp_reset_query();
                ?>

                <?php 
                    $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    );
                    $projects = new WP_Query($args);
                    while ($projects->have_posts()) {
                    $projects->the_post();
                ?>

                    <div class="released-comments">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo get_field('arvostelijan_arvosana')?>.png" alt="">
                        </div>
                        <p class="comment"><?php echo get_field('kommentti')?></p>
                        <p class="commentgiver"><?php echo get_field('arvostelijan_nimi')?></p>
                        <p class="commentgiverwho"><?php echo get_field('arvostelijan_ammatti')?></p>
                    </div>

                    <?php }
                    wp_reset_query();
                    ?>

                </div>
            </div>
        </div>
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

    <!-- Modal Start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <img id="mod-head-back" src="<?php echo get_template_directory_uri(); ?>/images/modalBackground.png" alt="">
                <img id="mod-head-logo" src="<?php echo get_template_directory_uri(); ?>/images/ARwhite.png" alt="">
            </div>
            <div class="modal-body">
                <h5><?php echo get_field('palaute_lomake_otsikko'); ?></h5>
                <p><?php echo get_field('palaute_lomake_leipateksti'); ?></p>
                <form method="post" enctype="multipart/form-data">
                    <div id="ratenamediv">
                        <input type="text" name="name" id="name" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <span class="content-name"><?php echo get_field('palaute_lomake_nimi'); ?></span>
                        </label>
                    </div>
                    <div id="rateemaildiv">
                        <input type="email" name="rateemail" id="rateemail" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <span class="content-name"><?php echo get_field('palaute_lomake_sahkoposti'); ?></span>
                        </label>
                    </div>
                    <div id="rateoccupationdiv">
                        <input type="text" id="rateoccupation" name="rateoccupation" autocomplete="off" required>
                        <label for="occupation" class="label-name">
                            <span class="content-name"><?php echo get_field('palaute_lomake_ammatti'); ?></span>
                        </label>
                    </div>
                    <div id="ratecommentdiv">
                        <input type="textarea" id="ratecomment" name="ratecomment" autocomplete="off" required>
                        <label for="occupation" class="label-name">
                            <span class="content-name"><?php echo get_field('palaute_lomake_kommentit'); ?></span>
                        </label>
                    </div>
                    <div id="ratevaluediv">
                        <div class="range-value" id="ratevalueV"></div>
                        <label for="month"><?php echo get_field('palaute_lomake_arvosana'); ?></label>
                        <input type="range" id="ratevalue" name="ratevalue" min="1" max="10" required>
                        <script>
                            const
                                rangerate = document.getElementById('ratevalue'),
                                ratevalueV = document.getElementById('ratevalueV'),
                                setValuerate = ()=>{
                                    const
                                        newValuerate = Number( (rangerate.value - rangerate.min) * 100 / (rangerate.max - rangerate.min) ),
                                        newPositionrate = 7 - (newValuerate * 0.2);
                                        ratevalueV.innerHTML = `<span>${rangerate.value}</span>`;
                                        ratevalueV.style.left = `calc(${newValuerate}% + (${newPositionrate}px))`;
                                };
                                document.addEventListener("DOMContentLoaded", setValuerate);
                                rangerate.addEventListener('input', setValuerate);
                        </script>
                    </div>
                    <div id="ratetermsdiv">
                        <input type="checkbox" name="terms" id="rateterms" autocomplete="off" required>
                        <label><?php echo get_field('palaute_lomake_ehdot'); ?> <a href=""><?php echo get_field('palaute_lomake_saannot_linkki'); ?></a></label>
                    </div>
                    <div id="sendingform">
                        <button id="close" type="button"  data-dismiss="modal" class="modalbuttons"><?php echo get_field('palaute_lomake_peruuta'); ?></button>
                        <button id="submitform" name="submitBtn" type="submit" class="modalbuttons"><?php echo get_field('palaute_lomake_laheta'); ?></button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->


    <?php }
        wp_reset_query();
    ?>

    

<?php get_footer(); ?>