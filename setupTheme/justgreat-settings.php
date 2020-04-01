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
        wp_enqueue_style( 'justgreat-settings', get_template_directory_uri() . '/setupTheme/css/justgreat-settings.css',[]);
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
        <h1><?php _e('Take a great start with our JustGreat wordpress theme', 'jusgreat') ?></h1>
        <p><?php _e('This theme has been made to be visually lite, easy to use and fully free.', 'justgreat') ?></p>
        
<?php
    }
}
?>