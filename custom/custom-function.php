<?php

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
    else{
        echo '0px !important';
    }
}

//Modify the margin of the slogan if there is a logo or not
function margin_slogan_modify(){
    $logo = get_theme_mod('justgreat_logo');
    
    if ($logo == 0){
        echo '75px !important;';
    }
    else{
        echo '135px !important';
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

//Display the social's picture when it's set
function justgreat_socials(){
    $facebook = esc_html(get_theme_mod('facebook', ''));
    $insta = esc_html(get_theme_mod('instagram', ''));
    $linkdin = esc_html(get_theme_mod('linkedin', ''));
    $imgface = get_template_directory_uri() . '/images/facebook.png';
    $imginsta = get_template_directory_uri() . '/images/instagram.png';
    $imglinkd= get_template_directory_uri() . '/images/linkdin.png';

    echo '<div class="justgreat_social">';
    if($facebook != '')
    {
        echo '<a href="' . $facebook . '" target="_blank"><img src="' . $imgface . '"></a>';
    }
    if($insta != '')
    {
        echo '<a href="' . $insta . '" target="_blank"><img src="' . $imginsta . '"></a>';
    }
    if($linkdin != '')
    {
        echo '<a href="' . $linkdin . '" target="_blank"><img src="' . $imglinkd . '"></a>';
    }
    echo '</div>';
}







?>