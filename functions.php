<?php

function justgreat_register_scripts()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', []);
    wp_register_style('justgreat', get_template_directory_uri() . '/style/justgreat.css', []);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    if (!is_customize_preview()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    }

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('justgreat');
    wp_enqueue_script('bootstrap');
}



function justgreat_supports()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('header', 'Header Menu');
    register_nav_menu('footer', 'Footer Menu');

    add_image_size('carousel', 1090, 290, true);
    add_image_size('logo', 80, 80, false);
}

function justgreat_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function justgreat_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function justgreat_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}


//taking the logo ID and turning it into a modified link that display a 80x80 picture of it
function logo_reader()
{
    $id = get_theme_mod('justgreat_logo');

    if ($id != 0) {
        $url = wp_get_attachment_url($id);
        if (stripos($url, '.png') !== FALSE) { // for a .png logo upload
            $mod_url = str_replace(".png", "-80x80.png", $url);
            echo  $mod_url;
        } else if (stripos($url, '.jpg') !== FALSE) { // for a .jpg logo upload
            $mod_url = str_replace(".jpg", "-80x80.jpg", $url);
            echo  $mod_url;
        } else {
            echo 'A logo is uploaded but the format is not supported, only .png and .jpg';
        }
    }
}

//Modify the margin of the title if there is a logo or not
function margin_title_modify(){
    $logo = get_theme_mod('justgreat_logo');

    if ($logo == 0){
        echo '-70px !important;';     
    }
}

//Modify the margin of the slogan if there is a logo or not
function margin_slogan_modify(){
    $logo = get_theme_mod('justgreat_logo');
    
    if ($logo == 0){
        echo '75px !important;';
    }
}
    

//Taking each picture of the carousel and turning it into a 1090x290 link to display
function carousel_image_reader($select)
{
    $id = get_theme_mod('justgreat_carousel1');
    $id2 = get_theme_mod('justgreat_carousel2');
    $id3 = get_theme_mod('justgreat_carousel3');
    

    //Première image du carousel
    if ($select =='1') {
        if ($id != 0) {
            $url = wp_get_attachment_url($id);
            if (stripos($url, '.jpg') !== FALSE) { //for a .jpg image -> upload
                $mod_url = str_replace(".jpg", "-1090x290.jpg", $url);
                echo $mod_url;
            } else {
                echo 'The picture must be a .jpg file';
            }
        }
    }
    //Seconde image du carousel
    if ($select == '2') {
        if ($id2 != 0) {
            $url2 = wp_get_attachment_url($id2);
            if (stripos($url2, '.jpg') !== FALSE) { //for a .jpg image -> upload
                $mod_url2 = str_replace(".jpg", "-1090x290.jpg", $url2);
                echo $mod_url2;
            } else {
                echo 'The picture must be a .jpg file';
            }
        }
    }
    //Première image du carousel
    if ($select == '3') {
        if ($id3 != 0) {
            $url3 = wp_get_attachment_url($id3);
            if (stripos($url3, '.jpg') !== FALSE) { //for a .jpg image -> upload
                $mod_url3 = str_replace(".jpg", "-1090x290.jpg", $url3);
                echo $mod_url3;
            } else {
                echo 'The picture must be a .jpg file';
            }
        }
    }
}

//taking the picture ID and apply the desired size of it and then display it
function fixed_banner_display()
{
    $banner = get_theme_mod('justgreat_fixed_banner');

    if ($banner != 0) {
        $the_url = wp_get_attachment_url($banner);
        if (stripos($the_url, '.jpg') !== FALSE) { // for a .jpg picture -> upload
            $real_url = str_replace(".jpg", "-1090x290.jpg", $the_url);
            echo  $real_url;
        } else {
            echo 'A picture is uploaded but the format is not supported, only .jpg';
        }
    }
}

add_action('wp_enqueue_scripts', 'justgreat_register_scripts');
add_action('after_setup_theme', 'justgreat_supports');
add_filter('nav_menu_css_class', 'justgreat_menu_class');
add_filter('nav_menu_link_attributes', 'justgreat_menu_link_class');

require_once('setupTheme/carousel.php');
require_once('setupTheme/justgreat-settings.php');
require_once('custom/custom-test.php');

CarouselMenuPage::register();
justGreatSettings::register();
justgreat_customize::register_customize_items();
