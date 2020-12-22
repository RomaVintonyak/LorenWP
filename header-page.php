<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Флористика, декор, банкетний зал, оформлення Івано - Франківськ, весільні декорації, оформлення весіль"/>
    <title><?php bloginfo('description'); ?></title>
    <!--fav icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/asets/img/fav_icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/asets/img/fav_icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/asets/img/fav_icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/asets/img/fav_icon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/asets/img/fav_icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--Section Header-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container-fluid">
            <a href="<?php echo get_home_url(); ?>" class="navbar-brand font-weight-bold"><?php the_field('navbar-brand'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu"
                    aria-controls="navMenu"
                    aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <?php 
                    wp_nav_menu( [
                        'theme_location'  => 'primary',
                        'menu'            => 'PrimaryMenu', 
                        'container'       => 'ul',
                        'menu_class'      => 'navbar-nav mr-auto scrolling-navbar', 
                        'echo'            => true,
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    ] ); 
                    wp_nav_menu(array(
                        'theme_location'  => 'social',
                        'menu'            => 'SocialMenu',
                        'container'       => 'ul', 
                        'menu_class'      => 'navbar-nav nav-flex-icons', 
                        'echo'            => true,
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    )); 
                ?>
            </div>
        </div>
    </nav>
    <div id="intro" class="view" style="background: url(<?php the_field('intro_bg'); ?>) no-repeat center center fixed; background-size: cover;">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="display-4  white-text pt-2 mb-1 unic-font">
                        <?php bloginfo( 'name' ); ?>
                        </h1>
                        <hr class="hr-light">
                        <h4 class="white-text my-4"><?php the_field('main_suptitle'); ?></h4>
                        <button type="button" class="scroll_down waves-effect waves-light" id="scroll_down">
                        <?php the_field('main_btn'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>