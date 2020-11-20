<?php get_header(); ?>

        <?php 
            $args = array(
            'post_type' => 'content',
            'posts_per_page' => 1,
            );
            $contents = new WP_Query($args);
            while ($contents->have_posts()) {
            $contents->the_post();
        ?>

<div class="container" id="luotto-body">
    <div class="luotto_info">
        <div class="row">
            <div class="col-sm-5">
                <h1><?php echo get_field('luottohakemus_otsikko'); ?></h1>
                <p><?php echo get_field('luottohakemus_leipateksti'); ?></p>
            </div>
            <div class="col-sm-7">
                <img src="<?php echo get_template_directory_uri(); ?>/images/formheaderpic.png" alt="">
            </div>
        </div>
    </div>
    <div class="luotto_container">
        <div class="luotto-information">
            <div class="tool-tip-1" id="tip1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tip2.png" alt="">
                <p>Rahoituksen kohteet</p>
                <ul>
                    <li>Henkilö- ja pakettiautot</li>
                    <li>Yksityisellä ja yrityksellä myynnissä olevat autot (pois lukien autoliikkeen autot)</li>
                    <li>Maksimissaan 10-15 vuotta vanhoja ja/tai alle 250 000 km ajettuja autoja</li>
                    <li>Ainoastaan Suomeen rekisteröidyt autot, joista verot on maksettu</li>
                    <li>Virittämättömät autot</li>
                </ul>
                <div id="clicktip1" type="button" onclick="tip1Function()">
                    <i class="fas fa-car"></i>
                </div>
            </div>
            <div class="tool-tip-2" id="tip2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tip3.png" alt="">
                <p>Rahoitukseen liittyvät tiedot</p>
                <ul>
                    <li>Luottohakemus haetaan kohdekohtaisesti ja luoton vakuutena on ostettava auto</li>
                    <li>Rahoituksen myöntäminen edellyttää aina hyväksyttyä luottopäätöstä</li>
                    <li>Tiettyihin kohteisiin saatavilla kunnossapitoturva. Lisätietoa löydätte sivuiltamme autoraha.fi/palvelumme</li>
                    <li>Kunnossapitoturvan ehdot löydätte sivuiltamme autoraha.fi/fragus</li>
                </ul>
                <div id="clicktip2" type="button" onclick="tip2Function()">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
            </div>
            <div class="tool-tip-3" id="tip3">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tip1.png" alt="">
                <p>Rahoituksen saamisen yleiset edellytykset</p>
                <ul>
                    <li>Säännölliset tulot</li>
                    <li>Moitteeton luottohistoria</li>
                    <li>Virallinen kotiosoite Suomessa</li>
                    <li>Voimassa oleva ajo-oikeus haettavaan kohteeseen</li>
                </ul>
                <div id="clicktip3" type="button" onclick="tip3Function()">
                    <i class="fas fa-clipboard-list"></i>
                </div>
            </div>
        </div>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend><?php echo get_field('AR_henkilotiedot'); ?></legend>
                <div class="inputarea">
                    <div class="text-inputs">
                        <input type="text" name="etunimi" id="etunimi" autocomplete="off" required>
                        <label for="etunimi" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_etunimi'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="sukunimi" id="sukunimi" autocomplete="off" required>
                        <label for="sukunimi" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_sukunimi'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="henkilotunnus" id="henkilotunnus" autocomplete="off" required>
                        <label for="henkilotunnus" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_henkilotunnus'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="osoite" id="osoite" autocomplete="off" required>
                        <label for="osoite" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_osoite'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="kaupunki" id="kaupunki" autocomplete="off" required>
                        <label for="kaupunki" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_kaupunki'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="postinumero" id="postinumero" autocomplete="off" required>
                        <label for="postinumero" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_postinumero'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="sahkopostiosoite" id="sahkopostiosoite" autocomplete="off" required>
                        <label for="sahkopostiosoite" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_sahkopostiosoite'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="puhelinnumero" id="puhelinnumero" autocomplete="off" required>
                        <label for="puhelinnumero" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_puhelinnumero'); ?></span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend><?php echo get_field('AR_lisatiedot'); ?></legend>
                <div class="inputarea">
                    <div class="text-inputs">
                        <select name="tyopaikka" id="tyopaikka" autocomplete="off" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_tyosuhde_vaihtoehto_1'); ?>"><?php echo get_field('AR_tyosuhde_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_tyosuhde_vaihtoehto_2'); ?>"><?php echo get_field('AR_tyosuhde_vaihtoehto_2'); ?></option>
                            <option value="<?php echo get_field('AR_tyosuhde_vaihtoehto_3'); ?>"><?php echo get_field('AR_tyosuhde_vaihtoehto_3'); ?></option>
                            <option value="<?php echo get_field('AR_tyosuhde_vaihtoehto_4'); ?>"><?php echo get_field('AR_tyosuhde_vaihtoehto_4'); ?></option>
                            <option value="<?php echo get_field('AR_tyosuhde_vaihtoehto_5'); ?>"><?php echo get_field('AR_tyosuhde_vaihtoehto_5'); ?></option>
                            <option value="<?php echo get_field('AR_tyosuhde_vaihtoehto_6'); ?>"><?php echo get_field('AR_tyosuhde_vaihtoehto_6'); ?></option>
                        </select>
                        <label for="tyopaikka" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_tyosuhde'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <select name="asumismuoto" id="asumismuoto" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_asumismuoto_vaihtoehto_1'); ?>"><?php echo get_field('AR_asumismuoto_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_asumismuoto_vaihtoehto_2'); ?>"><?php echo get_field('AR_asumismuoto_vaihtoehto_2'); ?></option>
                            <option value="<?php echo get_field('AR_asumismuoto_vaihtoehto_3'); ?>"><?php echo get_field('AR_asumismuoto_vaihtoehto_3'); ?></option>
                            <option value="<?php echo get_field('AR_asumismuoto_vaihtoehto_4'); ?>"><?php echo get_field('AR_asumismuoto_vaihtoehto_4'); ?></option>
                            <option value="<?php echo get_field('AR_asumismuoto_vaihtoehto_5'); ?>"><?php echo get_field('AR_asumismuoto_vaihtoehto_5'); ?></option>
                        </select>
                        <label for="asumismuoto" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_asumismuoto'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="ammatti" id="ammatti" autocomplete="off" required>
                        <label for="ammatti" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_ammatti'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="tyonanataja" id="tyonanataja" autocomplete="off" required>
                        <label for="tyonanataja" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_tyonantaja'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <select name="vuositulot" id="vuositulot" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_vuositulot_vaihtoehto_1'); ?>"><?php echo get_field('AR_vuositulot_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_vuositulot_vaihtoehto_2'); ?>">><?php echo get_field('AR_vuositulot_vaihtoehto_2'); ?></option>
                            <option value="<?php echo get_field('AR_vuositulot_vaihtoehto_3'); ?>">><?php echo get_field('AR_vuositulot_vaihtoehto_3'); ?></option>
                            <option value="<?php echo get_field('AR_vuositulot_vaihtoehto_4'); ?>">><?php echo get_field('AR_vuositulot_vaihtoehto_4'); ?></option>
                            <option value="<?php echo get_field('AR_vuositulot_vaihtoehto_5'); ?>">><?php echo get_field('AR_vuositulot_vaihtoehto_5'); ?></option>
                        </select>
                        <label for="vuositulot" class="label-name">
                            <span class="content-name"><option><?php echo get_field('AR_vuositulot'); ?></option></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <select name="asiakirja" id="asiakirja" autocomplete="off" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_tunnistusasiakirja_vaihtoehto_1'); ?>"><?php echo get_field('AR_tunnistusasiakirja_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_tunnistusasiakirja_vaihtoehto_2'); ?>"><?php echo get_field('AR_tunnistusasiakirja_vaihtoehto_2'); ?></option>
                        </select>
                        <label for="asiakirja" class="label-name">
                            <span class="content-name"><option><?php echo get_field('AR_tunnistusasiakirja'); ?></option></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="ajokortinnumero" id="ajokortinnumero" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <span class="content-name"><option><?php echo get_field('AR_ajokortin_hallinnollinen_numero_4d'); ?></option></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="myontaja" id="myontaja" autocomplete="off" required>
                        <label for="myontaja" class="label-name">
                            <span class="content-name"><option><?php echo get_field('AR_asiakirjan_myontaja'); ?></option></span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend><?php echo get_field('AR_ajoneuvon_tiedot'); ?></legend>
                <div class="inputarea">
                    <div class="text-inputs">
                        <input type="text" name="kohteenhinta" id="kohteenhinta" autocomplete="off" required>
                        <label for="kohteenhinta" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_kohteen_hinta'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <select name="ajoneuvoluokka" id="ajoneuvoluokka" autocomplete="off" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_ajoneuvoluokka_vaihtoehto_1'); ?>"><?php echo get_field('AR_ajoneuvoluokka_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_ajoneuvoluokka_vaihtoehto_2'); ?>"><?php echo get_field('AR_ajoneuvoluokka_vaihtoehto_2'); ?></option>
                            <option value="<?php echo get_field('AR_ajoneuvoluokka_vaihtoehto_3'); ?>"><?php echo get_field('AR_ajoneuvoluokka_vaihtoehto_3'); ?></option>
                        </select>
                        <label for="ajoneuvoluokka" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_ajoneuvoluokka'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="rekisterinumero" id="rekisterinumero" autocomplete="off" required>
                        <label for="rekisterinumero" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_rekisterinumero'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="merkki" id="merkki" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_merkki'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="malli" id="malli" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_malli'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="mittarilukema" id="mittarilukema" autocomplete="off" required>
                        <label for="name" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_mittarilukema'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="rekmaa" id="rekmaa" autocomplete="off" required>
                        <label for="rekmaa" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_ensirekisteroinnin_maa'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="kaytottopvm" id="kaytottopvm" autocomplete="off" required>
                        <label for="kaytottopvm" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_kayttoonottopaiva'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <select name="kayttotarkoitus" id="kayttotarkoitus" autocomplete="off" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_ajoneuvon_kayttotarkoitus_vaihtoehto_1'); ?>"><?php echo get_field('AR_ajoneuvon_kayttotarkoitus_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_ajoneuvon_kayttotarkoitus_vaihtoehto_2'); ?>"><?php echo get_field('AR_ajoneuvon_kayttotarkoitus_vaihtoehto_2'); ?></option>
                        </select>
                        <label for="kayttotarkoitus" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_ajoneuvon_kayttotarkoitus'); ?></span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend><?php echo get_field('AR_rahoituksen_tiedot'); ?></legend>
                <div class="inputarea" id="rahoitusinputarea">
                    <div class="text-inputs">
                        <select name="luottoaika" id="luottoaika" autocomplete="off" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_luottoaika_vaihtoehto_1'); ?>"><?php echo get_field('AR_luottoaika_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_luottoaika_vaihtoehto_2'); ?>"><?php echo get_field('AR_luottoaika_vaihtoehto_2'); ?></option>
                            <option value="<?php echo get_field('AR_luottoaika_vaihtoehto_3'); ?>"><?php echo get_field('AR_luottoaika_vaihtoehto_3'); ?></option>
                            <option value="<?php echo get_field('AR_luottoaika_vaihtoehto_4'); ?>"><?php echo get_field('AR_luottoaika_vaihtoehto_4'); ?></option>
                            <option value="<?php echo get_field('AR_luottoaika_vaihtoehto_5'); ?>"><?php echo get_field('AR_luottoaika_vaihtoehto_5'); ?></option>
                            <option value="<?php echo get_field('AR_luottoaika_vaihtoehto_6'); ?>"><?php echo get_field('AR_luottoaika_vaihtoehto_6'); ?></option>
                        </select>
                        <label for="luottoaika" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_luottoaika'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="kasiraha" id="kasiraha" autocomplete="off" required>
                        <label for="kasiraha" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_kasirahan_maara'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <input type="text" name="poikviimera" id="poikviimera" autocomplete="off" required>
                        <label for="poikviimera" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_poikkeava_viimeinen_era'); ?></span>
                        </label>
                    </div>
                    <div id="area_vaikutus" class="text-inputs">
                        <input type="text" name="vaikutus" id="vaikutus" autocomplete="off" required>
                        <label for="vaikutus" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_poliittinen_vaikutusvalta'); ?></span>
                        </label>
                    </div>
                    <div class="text-inputs">
                        <select name="kunnossapitoturva" id="kunnossapitoturva" autocomplete="off" required>
                            <option></option>
                            <option value="<?php echo get_field('AR_kunnossapitoturva_vaihtoehto_1'); ?>"><?php echo get_field('AR_kunnossapitoturva_vaihtoehto_1'); ?></option>
                            <option value="<?php echo get_field('AR_kunnossapitoturva_vaihtoehto_2'); ?>"><?php echo get_field('AR_kunnossapitoturva_vaihtoehto_2'); ?></option>
                        </select>
                        <label for="kunnossapitoturva" class="label-name">
                            <span class="content-name"><?php echo get_field('AR_kunnossapitoturva'); ?></span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="hyvaksyminen">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/acceptterms.png" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="checkboxes">
                            <input type="checkbox" name="terms" id="rateterms" autocomplete="off" required>
                            <label><?php echo get_field('AR_ehto_1'); ?></label>
                        </div>
                        <div class="checkboxes">
                            <input type="checkbox" name="terms" id="rateterms" autocomplete="off" required>
                            <label><?php echo get_field('AR_ehto_2'); ?></label>
                        </div>
                        <div class="checkboxes">
                            <input type="checkbox" name="terms" id="rateterms" autocomplete="off">
                            <label><?php echo get_field('AR_ehto_3'); ?></label>
                        </div>
                        <div class="sendform">
                            <button type="submit"><?php echo get_field('AR_laheta'); ?>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php }
    wp_reset_query();
?>

<script>

var tip1content = document.getElementById("tip1");
var tip2content = document.getElementById("tip2");
var tip3content = document.getElementById("tip3");


function tip1Function() {
    tip1content.classList.toggle("tip1view");
    if (tip2content.classList.contains("tip2view")) {
        tip2content.classList.toggle("tip2view");
    }
    if (tip3content.classList.contains("tip3view")) {
        tip3content.classList.toggle("tip3view");
    }
}

function tip2Function() {
    tip2content.classList.toggle("tip2view");
    if (tip1content.classList.contains("tip1view")) {
        tip1content.classList.toggle("tip1view");
    }
    if (tip3content.classList.contains("tip3view")) {
        tip3content.classList.toggle("tip3view");
    }
}

function tip3Function() {
    tip3content.classList.toggle("tip3view");
    if (tip1content.classList.contains("tip1view")) {
        tip1content.classList.toggle("tip1view");
    }
    if (tip2content.classList.contains("tip2view")) {
        tip2content.classList.toggle("tip2view");
    }
}


</script>

<?php get_footer(); ?>