<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/nebel.tv/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/nebel.tv/js/jquery.mCustomScrollbar.min.js"></script>

    <link rel="stylesheet" href="/wp-content/themes/nebel.tv/css/jquery.mCustomScrollbar.css"/>
</head>

<body <?php body_class(); ?>>
<div class="top-container">
    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <div class="tv-set green"> </div>
        <div class="tv-set brown"> </div>
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
    </a>

    <?php wp_nav_menu( array('theme_location' => 'high', 'menu_class' => 'nav-menu'));?>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <div class="header-content">
                <?php if(is_front_page()):?>
                    <div class="menu-item-highlighter" data-700="display:none"
                         data-1500="display:block" data-2300="left:266px" data-2500="left:435px" data-5300="left:435px" data-5500="left:605px" data-7300="left:605" data-7500="left:763px"></div>
                <?php endif?>
                <div id="navbar" class="navbar">
                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <?php
                        if(is_front_page()) { wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );}
                        ?>
                    </nav><!-- #site-navigation -->
                </div><!-- #navbar -->
                <div class="hot-links">
                    <ul>
                        <li class="try-it-li"><a class="try-it-now top <?php  if(is_front_page()) { echo 'hidden'; }?> " href="#"></a></li>
                        <li><a href="#" class="info">Info</a></li>
                        <li><a href="#" class="mail">Mail</a></li>

                    </ul>

                </div>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'secondary-nav-menu' ) ); ?>

            <div class="menu-link-holder">
                <a href="#">Menu</a>
            </div>

        </header><!-- #masthead -->

        <div id="main" class="site-main">
