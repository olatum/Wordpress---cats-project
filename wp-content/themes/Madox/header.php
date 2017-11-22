<?php
/**
 * Created by PhpStorm.
 * User: ola
 * Date: 20.11.17
 * Time: 16:21
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<!--    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">-->

    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">

        <?php
        wp_nav_menu(['menu'=>'main', 'menu_class'=>'nav']);
        ?>

    </div>
</header>


