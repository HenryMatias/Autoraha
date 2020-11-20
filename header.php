<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoraha</title>

    <?php wp_head(); ?>

</head>
<body>
    <?php

        // This gets the current pages' slug
        global $post;
        $post_slug = $post->post_name;


        if($post_slug == 'luottohakemus' || $post_slug == 'credit-application' || $post_slug == 'kreditansokan') {

            include 'assets/headers/header-application.php';

        } else {

            include 'assets/headers/header-home.php';

        }

    ?>

