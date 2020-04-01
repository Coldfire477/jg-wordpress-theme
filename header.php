<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php echo get_bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php get_site_icon_url() ?>" />
    <title><?php echo get_bloginfo('name') ?></title>
    <?php wp_head() ?>
</head>
<body>

    <div class="header">
        <div class="topHeader">
            <div class="logo" style="background: url(<?php logo_reader(); ?>)no-repeat !important;"></div>
            <h1 class="display-4" style="color:<?= get_theme_mod('title_color', '#000'); ?> !important;left: <?php margin_title_modify() ?>"><?php echo get_bloginfo('name') ?></h1>
            <p class="lead slogan" style="color:<?= get_theme_mod('slogan_color', '#007bff'); ?> !important;left: <?php margin_slogan_modify() ?>"><?php echo get_bloginfo('description') ?></p>
            <div class="clear"></div>
        </div>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary comportementNav" style="background-color:<?= get_theme_mod('nav_bar_color', '#007bff'); ?> !important;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto'
                ])
                ?>
                <?= get_search_form() ?>
            </div>
        </nav>
    </div>
    <div class="wrap">
        <!--end of the header part-->