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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container nav">

        <div class="nav_menu">
            <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
            </div>


            <ul id="nav-menu-bar" class="element_menu menu nav_menu_bar">
                <li><?php wp_nav_menu(['menu'=>'main', 'menu_class'=>'nav']); ?></li>

            </ul>
        </div>
    </div>


</header>




