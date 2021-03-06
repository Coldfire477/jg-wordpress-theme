<?php

if(! isset($content_width)){
    $content_width = 660;
}

function justgreat_enqueue_comments_reply() {
    if( get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
    }
}
    

//Page displayed in the template menu that will explain how to configure the website
require_once('admin/justgreat-settings.php');
//The customize API 
require_once('template-parts/justgreat-customize.php');
//Regroup the functions for the customize API to be fully working
require_once('template-parts/custom-function.php');
//The latestNews widget
require_once('widgets/latestNews-widget.php');
//The functions that makes the widgets working
require_once('widgets/widget-function.php');
//The Social widget
require_once('widgets/social-widget.php');
//the comment walker
require_once('inc/class-justgreat-walker-comment.php');


function justgreat_register_scripts()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/inc/style/bootstrap.min.css', []);
    wp_register_style('justgreat', get_template_directory_uri() . '/inc/style/justgreat.css', []);
    wp_register_script('bootstrap', get_template_directory_uri() . '/inc/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', get_template_directory_uri() . '/inc/js/popper.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('justgreat');
    wp_enqueue_script('bootstrap');
}



function justgreat_supports()
{
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support('post-thumbnails');
    register_nav_menu('header', 'Header Menu');
    register_nav_menu('footer', 'Footer Menu');
    add_image_size('carousel', 1090, 290, true); //carousel's picture size
    add_image_size('logo', 80, 80, false); //logo's picture size
    add_image_size('justgreat_thumbnail', 450, 150, true); //post-thumbnail picture size
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
        echo '<li class="' . esc_attr($class) . '">';
        echo esc_html(str_replace('page-numbers', 'page-link', $page));
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function justgreat_register_sidebar(){
    register_widget(latestNews_widget::class);
    register_widget(social_widget::class);
    register_sidebar([
        'id' => 'homepage',
        'name' => 'Homepage Sidebar',
        'before_widget' => '<div class="card mt-4 card-body %2$s" id="%1$s" style="width: 18rem;">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="card-title modTitle">',
        'after_title' => '</h5>'
    ]);
}

add_action( 'comment_form_before', 'justgreat_enqueue_comments_reply' );
add_action('wp_enqueue_scripts', 'justgreat_register_scripts');
add_action('after_setup_theme', 'justgreat_supports');
add_filter('nav_menu_css_class', 'justgreat_menu_class');
add_filter('nav_menu_link_attributes', 'justgreat_menu_link_class');
add_action('widgets_init', 'justgreat_register_sidebar');
add_action('after_setup_theme', function () {
    load_theme_textdomain('justgreat', get_template_directory() . '/languages');
});

justGreatSettings::register();
justgreat_customize::register_customize_items();
