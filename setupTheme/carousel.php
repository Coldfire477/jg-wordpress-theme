<?php

class CarouselMenuPage
{

    const GROUP = 'carousel_settings';

    public static function register()
    {
        add_action('admin_menu', [self::class, 'addMenu']);
        add_action('admin_init', [self::class, 'registerSettings']);
    }

    public static function registerSettings()
    {
        register_setting(self::GROUP, 'lien_image_1');
        register_setting(self::GROUP, 'lien_image_2');
        register_setting(self::GROUP, 'lien_image_3');
        register_setting(self::GROUP, 'hideCarousel');
        register_setting(self::GROUP, 'showBanner');
        add_settings_section('carousel_option_section', 'Settings', function () {
            echo "Here you can manage the settings for the carousel";
        }, self::GROUP);
        add_settings_field('image_option_carousel', "Carousel's pictures (.jpg only)", function () {
?>
            <div style="width:50%;">
                <label for="lien_image_1">First picture URL: </label>
                <input type="text" name="lien_image_1" id="lien_image_1" style="width: 100%;margin-bottom:10px;" value="<?= esc_html(get_option('lien_image_1', 'Paste your URL .jpg')); ?>"></br>
                <label for="lien_image_2">Second picture URL: </label>
                <input type="text" name="lien_image_2" id="lien_image_2" style="width: 100%;margin-bottom:10px;" value="<?= esc_html(get_option('lien_image_2', 'Paste your URL .jpg')); ?>"></br>
                <label for="lien_image_3">Third picture URL: </label>
                <input type="text" name="lien_image_3" id="lien_image_3" style="width: 100%;margin-bottom:40px;" value="<?= esc_html(get_option('lien_image_3', 'Paste your URL .jpg')); ?>">
                <p style="margin-bottom: 30px;">
                    <label><input name="hideCarousel" type="radio" value="0" <?php checked(0, get_option('hideCarousel')); ?> />Display the Carousel</label></br>
                    <label><input name="hideCarousel" type="radio" value="1" <?php checked(1, get_option('hideCarousel')); ?> />Display a fixed banner</label></br>
                    <label><input name="hideCarousel" type="radio" value="2" <?php checked(2, get_option('hideCarousel')); ?> />Don't show anything</label>
                </p>
                <label for="showBanner">The fixed banner's picture (only .jpg)</label>
                <input type="text" name="showBanner" id="showBanner" style="width: 100%;margin-bottom:40px;" value="<?= esc_html(get_option('showBanner', 'Paste your URL .jpg')); ?>">

            </div>
        <?php
        }, self::GROUP, 'carousel_option_section');
        
    }
    

    public static function addMenu()
    {
        add_theme_page("Carousel settings", "Carousel", "manage_options", self::GROUP, [self::class, 'render']);
    }

    public static function render()
    {
        ?>
        <h1>Carousel settings</h1>

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