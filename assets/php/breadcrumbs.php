<?php

function the_breadcrumb() {
    if (!is_home()) {
        echo '<div class="breadcrumbs">';
            echo '<div class="container">';
                echo '<div class="breadcrumb-line">';
                    echo '<a class="breadcrumbs-home" href="';
                    echo get_option('home');
                    echo '">';
                        echo 'Autoraha';
                    echo "</a>  / ";
                    echo the_title();
                echo '</div>  ';
            echo '</div>  ';
        echo '</div>  ';
    }
}

?>