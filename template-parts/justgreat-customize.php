<?php

/**
 * Customomize API
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
            'title' => __('Modify the website colors', 'justgreat'),
            'priority' => 150,
            'capability' => 'edit_theme_options',
        ));
//title color modification
        $wp_customize->add_setting('title_color', array(
            'default' => '#000000',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title_color', array(
            'label' => __('Title color', 'justgreat'),
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
            'label' => __('Slogan color', 'justgreat'),
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
            'label' => __('Navigation bar color', 'justgreat'),
            'section' => 'color_modification_section',
            'settings' => 'nav_bar_color',
        )));

        //link color modificitaion
        $wp_customize->add_setting('blog_link_color', array(
            'default' => '#007bff',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_link_color', array(
            'label' => __('Links color', 'justgreat'),
            'section' => 'color_modification_section',
            'settings' => 'blog_link_color',
        )));

        //Contour du carousel color modificitaion
        $wp_customize->add_setting('carousel_contour_color', array(
            'default' => '#007bff',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'carousel_contour_color', array(
            'label' => __('Carousel contour color', 'justgreat'),
            'section' => 'color_modification_section',
            'settings' => 'carousel_contour_color',
        )));
//logo upload / modification
        $wp_customize->add_section('logo_section', array(
            'title' => __('Add / Modify the logo', 'justgreat'),
            'priority' => 150,
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
            'label' => __('Add / Modify the logo', 'justgreat'),
            'section' => 'logo_section',
            'settings' => 'justgreat_logo',
            
        )));
//carousel modification
        $wp_customize->add_section('carousel_section', array(
            'title' => __('Carousel pictures', 'justgreat'),
            'priority' => 150,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('justgreat_carousel1', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'justgreat_carousel1', array(
            'label' => __('Select your pictures for the carousel', 'justgreat'),
            'description' => __('The pictures must be at least 1090px width, otherwise it won\'t work !', 'justgreat'),
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
            'title' => __('Carousel settings', 'justgreat'),
            'priority' => 150,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('carousel_enable', array(
            'default' => 'enable',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'carousel_enable', array(
            'label' => __('Enable / Disable the carousel', 'justgreat'),
            'section' => 'carousel_parameters_section',
            'settings' => 'carousel_enable',
            'type' => 'radio',
            'choices' => array(
                'enable' => __('Enable', 'justgreat'),
                'fixed_banner' => __('Fixed banner', 'justgreat'),
                'disable' => __('Disable', 'justgreat'),
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
            'label' => __('Fixed banner picture', 'justgreat'),
            'description' => __('The picture must be at least 1090px width, otherwise it won\'t work !', 'justgreat'),
            'section' => 'carousel_parameters_section',
            'settings' => 'justgreat_fixed_banner',
            
        )));

         //column parameters
         $wp_customize->add_section('column_parameters_section', array(
            'title' => __('Column settings', 'justgreat'),
            'priority' => 150,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('leftOrRight', array(
            'default' => 'left',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'leftOrRight', array(
            'label' => __('Widget column side', 'justgreat'),
            'section' => 'column_parameters_section',
            'settings' => 'leftOrRight',
            'type' => 'radio',
            'choices' => array(
                'left' => __('Left', 'justgreat'),
                'right' => __('Right', 'justgreat'),
            )
        )));

        //socials parameters
        $wp_customize->add_section('social_section', array(
            'title' => __('Config my socials', 'justgreat'),
            'priority' => 150,
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('description', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'description', array(
            'description' => __('Paste your social links in the inputs, the format must be like "http://www.mysocial.com"', 'justgreat'),
            'label' => '',
            'section' => 'social_section',
            'settings' => 'description',  
            'type'     => 'hidden',
        )));

        $wp_customize->add_setting('facebook', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook', array(
            'label' => 'Facebook',
            'section' => 'social_section',
            'settings' => 'facebook',     
        )));

        $wp_customize->add_setting('instagram', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram', array(
            'label' => 'Instagram',
            'section' => 'social_section',
            'settings' => 'instagram',           
        )));

        $wp_customize->add_setting('linkedin', array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'linkedin', array(
            'label' => 'LinkedIn',
            'section' => 'social_section',
            'settings' => 'linkedin',          
        )));


    }


    
   

}


    



