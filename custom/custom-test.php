<?php

/**
 * Custom test
 *
 * @package justgreat
 */
class justgreat_customize
{

    public static function register_customize_items(){
        add_action('customize_register', [self::class, 'justgreat_customize_register']);   
    }

    public static function justgreat_customize_register($wp_customize)
    {

        $wp_customize->add_section('color_modification_section', array(
            'title' => 'Modifier les couleurs du site',
            'priority' => 30,
            'capability' => 'edit_theme_options',
        ));
//title color modification
        $wp_customize->add_setting('title_color', array(
            'default' => '#000000',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title_color', array(
            'label' => 'Couleur du titre',
            'section' => 'color_modification_section',
            'settings' => 'title_color',
        )));
//slogan color modification
        $wp_customize->add_setting('slogan_color', array(
            'default' => '#007bff',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'slogan_color', array(
            'label' => 'Couleur du slogan',
            'section' => 'color_modification_section',
            'settings' => 'slogan_color',
        )));
//navbar color modificitaion
        $wp_customize->add_setting('nav_bar_color', array(
            'default' => '#007bff',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_bar_color', array(
            'label' => 'Couleur de la barre de navigation',
            'section' => 'color_modification_section',
            'settings' => 'nav_bar_color',
        )));
//logo upload / modification
        $wp_customize->add_section('logo_section', array(
            'title' => 'Ajouter / Modifier le logo',
            'priority' => 30,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('justgreat_logo', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'width' => 80,
            'height' => 80,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'justgreat_logo', array(
            'label' => 'Ajouter / Modifier un logo',
            'section' => 'logo_section',
            'settings' => 'justgreat_logo',
            
        )));
//carousel modification
        $wp_customize->add_section('carousel_section', array(
            'title' => 'Images du carousel',
            'priority' => 30,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('justgreat_carousel1', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'justgreat_carousel1', array(
            'label' => 'Importez vos images pour le carousel',
            'section' => 'carousel_section',
            'settings' => 'justgreat_carousel1',
            
        )));

        $wp_customize->add_setting('justgreat_carousel2', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'width' => 1090,
            'height' => 290,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'justgreat_carousel2', array(
            'label' => '',
            'section' => 'carousel_section',
            'settings' => 'justgreat_carousel2',
            
        )));

        $wp_customize->add_setting('justgreat_carousel3', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'width' => 1090,
            'height' => 290,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'justgreat_carousel3', array(
            'label' => '',
            'section' => 'carousel_section',
            'settings' => 'justgreat_carousel3',
            
        )));

        //carousel parameters
        $wp_customize->add_section('carousel_parameters_section', array(
            'title' => 'Paramètres du carousel',
            'priority' => 30,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('carousel_enable', array(
            'default' => 'enable',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'carousel_enable', array(
            'label' => 'Activer / Désactiver le carousel',
            'section' => 'carousel_parameters_section',
            'settings' => 'carousel_enable',
            'type' => 'radio',
            'choices' => array(
                'enable' => 'Activé',
                'fixed_banner' => 'Bannière fixe',
                'disable' => 'Désactivé',
            )
        )));

        $wp_customize->add_setting('justgreat_fixed_banner', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'width' => 1090,
            'height' => 290,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'justgreat_fixed_banner', array(
            'label' => 'Image de la bannière fixe',
            'section' => 'carousel_parameters_section',
            'settings' => 'justgreat_fixed_banner',
            
        )));


    }


    
   

}


    



