<?php

if(isset($_POST['vaihevalikkovahvistus'])) {

    $field_name = "hakemuksen_vaihe";
    $new_vaihe = $_POST['vaihevalikko'];
    $hakemus_id = $_POST['change_post_id'];

    update_field($field_name, $new_vaihe, $hakemus_id);


    $field_name = "hakemuksen_vaihe_prosentti";
        if($new_vaihe == 'Uusi Hakemus') {
            $new_progress = 20;
        } else if ($new_vaihe == 'Rekisteröity') {
            $new_progress = 40;
        } else if ($new_vaihe == 'Käsiteltävänä') {
            $new_progress = 60;
        } else if ($new_vaihe == 'Hyväksytty') {
            $new_progress = 80;
        } else if ($new_vaihe == 'Hylätty') {
            $new_progress = 100;
        } else if ($new_vaihe == 'Valmis') {
            $new_progress = 100;
        }
    $hakemus_id = $_POST['change_post_id'];

    update_field($field_name, $new_progress, $hakemus_id);


    $field_name = "hakemuksen_vaihe_vari";
        if($new_vaihe == 'Hylätty') {
            $new_color = 'danger';
        } else if ($new_vaihe == 'Käsiteltävänä') {
            $new_color = 'warning';
        } else {
            $new_color = 'success';
        } 
    $hakemus_id = $_POST['change_post_id'];

    update_field($field_name, $new_color, $hakemus_id);


    if(isset($_POST['vaihevalikkovahvistus'])) {

        $daytime = date('d.m.Y-H:i', time() + 3 * 60 * 60);

        $row = array(
            'muokkaaja' => $_POST['vaihevalikkovahvistus'],
            'raportti'  => $_POST['vaihevalikko'],
            'aika'   => $daytime,
        );
        
        add_row('muokkaus_historia', $row, $hakemus_id);

    };

};

?>