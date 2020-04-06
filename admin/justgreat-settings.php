<?php 
/**
 * Setting Page.
 *
 * @package Justgreat
 */

class justGreatSettings
{

public static function register(){
    add_action('admin_menu', [self::class, 'addMenu']);
    add_action('admin_enqueue_scripts', [self::class, 'admin_style_loading'] );
}

public static function admin_style_loading(){
        wp_enqueue_style( 'justgreat-settings', get_template_directory_uri() . '/admin/css/justgreat-settings.css',[]);
}

public static function addMenu()
    {
        add_theme_page(
            __('Great start !', 'justgreat'),
            __('Great start !', 'justgreat'),
            "manage_options", 
            'just-great-settings', 
            [self::class, 'render']);
    }

    public static function render()
    {
        ?>
        <h1><?php esc_html_e('Take a great start with our JustGreat WordPress theme', 'justgreat') ?></h1>
        <p><?php esc_html_e('This theme has been made to be visually lite, easy to use and fully free.', 'justgreat') ?></p></br>
        <p><?php esc_html_e('For the best install I suggest you to follow the documentation: ', 'justgreat') ?><a href="https://docs.google.com/document/d/1v5Ep1nH9sj9_9rDlWzohc9E6sEhQeJDkbleiJN4EESw/edit?usp=sharing" target="blank">Install documentation</a></p>
        <p><?php esc_html_e('The installation takes 10 to 20 minutes to be done if you follow this doc. The customization time depends on you.', 'justgreat') ?></p>
        <p><?php esc_html_e('Be aware that i\'ve done this theme on a non-profit purpose and the theme may not have a lot of updates in the futur. Anyway there is a lot of thing to do already, and give yourself a free good looking website.', 'justgreat') ?></p>
        
<?php
    }
}
?>