<?php 
/**
 * Setting Page.
 *
 * @package Justgreat
 */

class justGreatSettings
{

const GROUP = 'just-great-settings';


public static function register(){
    add_action('admin_menu', [self::class, 'addMenu']);
    add_action('admin_init', [self::class, 'registerSettings']);
    add_action('admin_enqueue_scripts', [self::class, 'admin_style_loading'] );
}

public static function registerSettings(){

}

public static function admin_style_loading(){
    if (!is_customize_preview()) {
        wp_enqueue_style( 'justgreat-settings', get_template_directory_uri() . '/setupTheme/css/justgreat-settings.css',[]);
    }
}


public static function addMenu()
    {
        add_theme_page(
            'Paramètres du thème',
            'Paramètres du thème',
            "manage_options", 
            self::GROUP, 
            [self::class, 'render']);
    }

    public static function render()
    {
        ?>
        <h1>Paramètres et mise en place</h1>
        <p>Ce thème à été conçu pour être léger visuellement, simple d'utilisation et entièrement gratuit.</p>
        <p>Des mises à jour y seront appliquées, vous pouvez aussi faire des demandes personnelles d'amélioration dans la mesure du raisonnable elles seront ajoutées.</p>

        <form action="options.php" method="POST">
            <?php
            settings_fields(self::GROUP);
            do_settings_sections(self::GROUP);
            submit_button();
            ?>
        </form>
<?php
    }
}
















?>