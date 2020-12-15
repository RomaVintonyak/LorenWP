<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Loren - студія весільного декору та флористики"/>
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
    <div id="intro" class="view" style="background: url(<?php bloginfo('template_url'); ?>/asets/img/404/404.jpg) no-repeat center center fixed; background-size: cover;">
        <div class="mask rgba-black-strong">
            <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="display-4  white-text pt-2 mb-1 unic-font">
                            OPS!!! This page not found.
                        </h1>
                        <hr class="hr-light">
                        <a href="<?php echo home_url();?>" class="btn btn-outline-white waves-effect waves-light">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>