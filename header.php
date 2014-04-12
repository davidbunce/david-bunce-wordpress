<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="container main-header">
            <a class="logo" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/assets/logo.png" />
            </a>
            <button class="navbar-button" class="navbar-toggle" data-toggle="collapse" data-target="main-navbar">

            </button>

            <?php wp_nav_menu(
                array(
                    'container' => 'nav',
                    'menu' => 'Main Menu',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'main-navbar',
                    'menu_class' => 'main-menu',
                )
            ); ?>

        </header>