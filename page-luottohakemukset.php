<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoraha</title>

    <?php wp_head(); ?>

    <script type='text/javascript' src='http://autoraha.local/wp-content/themes/Autoraha/js/slickslider.js?ver=1.0.0' id='slickslider-js'></script>
    <script type='text/javascript' src='http://autoraha.local/wp-content/themes/Autoraha/slick/slick.min.js?ver=1.0.0' id='slick-js-js'></script>

</head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="list-group hakemuksienlistaus" id="application-list" role="tablist">
                        <?php 
                            $args = array(
                            'post_type' => 'application',
                            'posts_per_page' => 1000,
                            'orderby' => 'date',
                            );
                            $applications = new WP_Query($args);
                            while ($applications->have_posts()) {
                            $applications->the_post();
                        ?>
                    
                        <a class="list-group-item list-group-item-action" id="<?php echo get_field('sukunimi'); ?>-list" data-toggle="list" data-target="#<?php echo get_field('sukunimi'); ?><?php echo get_field('etunimi'); ?>_first" data-secondary="#<?php echo get_field('sukunimi'); ?><?php echo get_field('etunimi'); ?>_second" role="tab" aria-controls="<?php echo get_field('sukunimi'); ?><?php echo get_field('etunimi'); ?>"><?php echo get_field('sukunimi'); ?> <?php echo get_field('etunimi'); ?>
                            <div class="hakemuksenvaiheet progress">
                                <div class="progress-bar progress-bar-striped bg-<?php echo get_field('hakemuksen_vaihe_vari'); ?>" role="progressbar" style="width: <?php echo get_field('hakemuksen_vaihe_prosentti'); ?>%">
                                </div>
                            </div>
                            <div class="hakemuksentila">TILA: <?php echo get_field('hakemuksen_vaihe'); ?>
                            </div>
                        </a>
                    
                        <?php }
                            wp_reset_query();
                        ?>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('.slidernumbers').append( "<div class='previous' type='button'><i class='fas fa-long-arrow-alt-left'></i></div>" );
                            $('.slidernumbers').append( "<div class='next' type='button'><i class='fas fa-long-arrow-alt-right'></i></div>" );
                        });
                    </script>



        
                    <div class="hakemukseneditointi">
                            <div id="nav-tabContent2" class="tab-content">
                                <?php 
                                    $args = array(
                                    'post_type' => 'application',
                                    'posts_per_page' => 1000,
                                    'orderby' => 'date',
                                    );
                                    $applications = new WP_Query($args);
                                    while ($applications->have_posts()) {
                                    $applications->the_post();
                                ?>

                            <div class="tab-pane fade show" id="<?php echo get_field('sukunimi'); ?><?php echo get_field('etunimi'); ?>_first" role="tabpanel">
                                <div class="row">
                                    <div class="col-2 nav flex-column nav-pills">
                                        <a class="nav-link active" id="vaiheistus" data-toggle="pill" href="#vaiheistus-<?php echo get_the_ID(); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-pen"></i></a>
                                        <a class="nav-link" id="kontaktointi" data-toggle="pill" href="#toiminnot-<?php echo get_the_ID(); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-envelope"></i></a>
                                        <a class="nav-link" id="toimintaloki" data-toggle="pill" href="#historia-<?php echo get_the_ID(); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-history"></i></a>
                                        <a class="nav-link" id="asetukset" data-toggle="pill" href="#asetukset-<?php echo get_the_ID(); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-wrench"></i></a>                                
                                    </div>
                                    <div class="col-10 tab-content">
                                        <div class="tab-pane fade show active" id="vaiheistus-<?php echo get_the_ID(); ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            
                                            <form method="post" enctype="multipart/form-data">
                                                <h3>LUOTTOPÄÄTÖKSEN TILA</h3>
                                                <div class="vaiheenvalinta">
                                                    <label for="vaihevalikko">HAKEMUKSEN TILA</label>
                                                    <select name="vaihevalikko" id="vaihevalikko" autocomplete="off" required>
                                                        <option><?php echo get_field('hakemuksen_vaihe'); ?></option>
                                                        <option value="Uusi Hakemus">Uusi Hakemus</option>
                                                        <option value="Rekisteröity">Rekisteröity</option>
                                                        <option value="Käsiteltävänä">Käsiteltävänä</option>
                                                        <option value="Hyväksytty">Hyväksytty</option>
                                                        <option value="Hylätty">Hylätty</option>
                                                        <option value="Valmis">Valmis</option>
                                                    </select>
                                                </div>
                                                <div class="vaiheenvahvistaja">
                                                    <label for="vaihevalikkovahvistus">HYVÄKSYJÄ</label>
                                                    <select name="vaihevalikkovahvistus" id="vaihevalikkovahvistus" autocomplete="off" required>
                                                        <option></option>
                                                        <option value="Markus Rissanen">Markus Rissanen</option>
                                                        <option value="Mikko Lakkonen">Mikko Lakkonen</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="change_post_id" id="change_post_id" value="<?php echo get_the_ID(); ?>">
                                                <button type="submit">VAHVISTA</button>
                                            </form>
                                       
                                       
                                        </div>
                                        <div class="tab-pane fade" id="toiminnot-<?php echo get_the_ID(); ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h3>TOIMINNOT</h3>
                                        </div>
                                        <div class="tab-pane fade" id="historia-<?php echo get_the_ID(); ?>" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <h3>HISTORIA</h3>
                                            <div class="vaihehistoria">




                                                <?php if( have_rows('muokkaus_historia') ): ?>
                                                <ul>
                                                <?php while( have_rows('muokkaus_historia') ): the_row(); ?>
                                                    <li>
                                                        <p class="date"><?php the_sub_field('aika'); ?></p>
                                                        <p class="data"><?php the_sub_field('raportti'); ?> - <?php the_sub_field('muokkaaja'); ?></p>
                                                    </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                                <?php endif; ?>




                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                                <?php }
                                    wp_reset_query();
                                ?>
                            </div>

                            







                    </div>
                </div>
                <div class="col-8">
                    <fieldset style="border: 2px groove #5f4a8b !important; border-radius: 10px; overflow: hidden;">
                    <div class="hakemuksenmuokkaus">
                        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/ARwhite.png" alt="">
                    </div>
                    <div class="row" id="hakemus">
                        <div class="col-3" id="luottohakemuksienotsikot">
                                    <p>HENKILÖTIEDOT</p>
                                    <p>LISÄTIEDOT</p>
                                    <p>AJONEUVON TIEDOT</p>
                        </div>
                        <div class="col-9" id="luottohakemuksientiedot">



                            <div class="tab-content" id="nav-tabContent">
                            <?php 
                                    $args = array(
                                    'post_type' => 'application',
                                    'posts_per_page' => 1000,
                                    'orderby' => 'date',
                                    );
                                    $applications = new WP_Query($args);
                                    while ($applications->have_posts()) {
                                    $applications->the_post();
                                ?>

                                <div class="tab-pane fade show" id="<?php echo get_field('sukunimi'); ?><?php echo get_field('etunimi'); ?>_second" role="tabpanel">
                                    <div>
                                        <div class="input-luottohakemus">
                                            <label>Etunimi</label>
                                                <input type="text" value="<?php echo get_field('etunimi'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Sukunimi</label>
                                                <input type="text" value="<?php echo get_field('sukunimi'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Henkilötunnus</label>
                                                <input type="text" value="<?php echo get_field('henkilotunnus'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Osoite</label>
                                                <input type="text" value="<?php echo get_field('osoite'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Kaupunki</label>
                                                <input type="text" value="<?php echo get_field('kaupunki'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Postinumero</label>
                                                <input type="text" value="<?php echo get_field('postinumero'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Sähköpostiosoite</label>
                                                <input type="text" value="<?php echo get_field('sahkopostiosoite'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Puhelinnumero</label>
                                                <input type="text" value="<?php echo get_field('puhelinnumero'); ?>">
                                        </div>

                                        <br><br><br><br>

                                        <div class="input-luottohakemus">
                                            <label>Työsuhde</label>
                                                <input type="text" value="<?php echo get_field('tyosuhde'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Asumismuoto</label>
                                                <input type="text" value="<?php echo get_field('asumismuoto'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Ammatti</label>
                                                <input type="text" value="<?php echo get_field('ammatti'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Työnantaja</label>
                                                <input type="text" value="<?php echo get_field('tyonantaja'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Vuositulot</label>
                                                <input type="text" value="<?php echo get_field('vuositulot'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Tunnistusasiakirja</label>
                                                <input type="text" value="<?php echo get_field('tunnistusasiakirja'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Ajorkotin Hallinnollinen numero</label>
                                                <input type="text" value="<?php echo get_field('ajokortin_numero'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Asiakirjan myöntäjä</label>
                                                <input type="text" value="<?php echo get_field('asiakirjan_myontaja'); ?>">
                                        </div>

                                        <br><br><br><br>

                                        <div class="input-luottohakemus">
                                            <label>Kohteen hinta</label>
                                                <input type="text" value="<?php echo get_field('kohteen_hinta'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Rekisterinumero</label>
                                                <input type="text" value="<?php echo get_field('rekisterinumero'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Merkki</label>
                                                <input type="text" value="<?php echo get_field('merkki'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Malli</label>
                                                <input type="text" value="<?php echo get_field('malli'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Mittarilukema</label>
                                                <input type="text" value="<?php echo get_field('mittarilukema'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Ajoneuvoluokka</label>
                                                <input type="text" value="<?php echo get_field('ajoneuvoluokka'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Ensirekisteröinti Maa</label>
                                                <input type="text" value="<?php echo get_field('rekisterointi_maa'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Käyttöönottopäivä</label>
                                                <input type="text" value="<?php echo get_field('kayttoonottopaiva'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Käyttötarkoitus</label>
                                                <input type="text" value="<?php echo get_field('kayttotarkoitus'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Luottoaika</label>
                                                <input type="text" value="<?php echo get_field('luottoaika'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Käsiraha</label>
                                                <input type="text" value="<?php echo get_field('kasiraha'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Poikkeava viimeinen erä</label>
                                                <input type="text" value="<?php echo get_field('poikkeava'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Poliittinen vaikutusvalta</label>
                                                <input type="text" value="<?php echo get_field('poliittinen'); ?>">
                                        </div>
                                        <div class="input-luottohakemus">
                                            <label>Kunnossapitoturva</label>
                                                <input type="text" value="<?php echo get_field('kunnossapitoturva'); ?>">
                                        </div>

                                    </div>
                                </div>
                            
                            <?php }
                                wp_reset_query();
                            ?>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $('#nav-tabContent div:nth-child(1)').addClass("active");
                                });
                            </script>

                            <script>
                                $('application-list a').on('click', function (e) {
                                    e.preventDefault()
                                    $(this).tab('show')
                                })
                            </script>





                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>

</body>
    <footer>
    </footer>

</html>