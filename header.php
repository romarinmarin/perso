<!doctype html>

<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        <?php wp_title(''); ?>
    </title>
    <meta name="description" content="Webmaster et Développeur web à Rennes 35, je réalise la création et le référencement de vos sites web en ille et vilaine et en bretagne">
    <meta name="author" content="Romaric Anquetil">
    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@romarinmarin_">
    <meta name="twitter:title" content="Romaric Anquetil - Intégrateur & développeur web en Freelance sur Rennes">
    <meta name="twitter:description" content="Webmaster et Développeur web à Rennes 35, je réalise la création et le référencement de vos sites web en ille et vilaine et en bretagne">
    <meta name="twitter:creator" content="@romarinmarin_">
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/library/images/romaric-fb-tw.png">
    <meta property="og:site_name" content="Romaric Anquetil - Intégrateur & développeur web en Freelance sur Rennes">
    <meta property="og:description" content="Webmaster et Développeur web à Rennes 35, je réalise la création et le référencement de vos sites web en ille et vilaine et en bretagne">
    <meta property="og:url" content="https://romaricanquetil.com/">
    <meta property="og:title" content="Romaric Anquetil">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/romaric-fb-tw.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#EEBF0C">
    <meta name="theme-color" content="#121212">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <?php // wordpress head functions ?>

    <?php wp_head(); ?>
    <?php // end of wordpress head ?>
    <?php // drop Google Analytics Here ?>
    <?php // end analytics ?>


</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <div class="container">

            <div class="header__logo">
                <a href="<?php echo home_url(); ?>" rel="nofollow">
                    <p>Romaric !</p>
                </a>
                <!-- <img
                    src="<?php echo get_template_directory_uri(); ?>/library/images/logo-solvalor.png"
                    alt="solvalor-logo"> -->

            </div>
            <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="header__nav">
                <?php wp_nav_menu(array(
                'container' => false,                           // remove nav container
                'container_class' => '',                 // class of container (should you choose to use it)
                'menu' => __('The Main Menu', 'bonestheme'),  // nav name
                'menu_class' => 'menu',               // adding custom nav class
                'theme_location' => 'main-nav',                 // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => ''                             // fallback function (if there is one)
            )); ?>
            </nav>

            <!-- <div class="header__logo--mobile">
        <a href="<?php echo home_url(); ?>" rel="nofollow"><p>Romaric !</p></a> 
        </div> -->
            <div class="hamburger-icon">
                <span></span>
            </div>

            <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="header__nav--mobile">
                <?php wp_nav_menu(array(
                'container' => false,                           // remove nav container
                'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                'menu' => __('mobile-menu', 'bonestheme'),  // nav name
                'menu_class' => 'menu--mobile',               // adding custom nav class
                'theme_location' => 'main-nav',                 // where it's located in the theme
                'before' => '',                                 // before the menu
                'after' => '',                                  // after the menu
                'link_before' => '',                            // before each link
                'link_after' => '',                             // after each link
                'depth' => 0,                                   // limit the depth of the nav
                'fallback_cb' => ''                             // fallback function (if there is one)
            )); ?>
            </nav>
        </div>

    </header>