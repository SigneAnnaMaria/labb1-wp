<?php

function labb1_theme_support()
{
    //Lägger till dynamisk sid-titel
    add_theme_support('title-tag');
    //Lägger till möjligheten att lägga till bilder
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'labb1_theme_support');

function labb1_menus()
{
    //Skapar olika menyer
    $locations = array(
        'primary' => "Desktop Top Bar Menu",
        'footer' => "Footer Social Menu",
        'side-menu' => "Sidebar Menu",
        'side-menu-sidor' => "Side Menu Sidor",
        'side-menu-arkiv' => "Side Menu Arkiv",
        'side-menu-kategorier' => "Side Menu Kategorier"
    );

    //Lägger till meny möjlighet i wp-adminpanel
    register_nav_menus($locations);
}

add_action('init', 'labb1_menus');


//Begränsar blogginlägg till 3 stycken
function custom_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 3);
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');



function labb_register_styles()
{   //Lägger till styling
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('labb-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(), '3.3.7', 'all');
    wp_enqueue_style('labb-style', get_template_directory_uri() . "/assets/css/style1.css", array('labb-bootstrap'), $version, 'all');
    wp_enqueue_style('labb-fontawesome', get_template_directory_uri() . "/assets/css/font-awesome.css", array(), '4.6.3', 'all');
}

add_action('wp_enqueue_scripts', 'labb_register_styles');

function labb_register_scripts()
{   //Lägger till scripten längst ner på sidan
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('labb-jquery', get_template_directory_uri() . "/assets/js/jquary.js", array(), '1.0', true);
    wp_enqueue_style('labb-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'labb_register_scripts');

//Lägger till dynamiska widgets som finns i backend wp-adminpanel för redigering
function labb1_widgets()
{

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area 2',
            'id' => 'footer-2',
            'description' => 'Footer Widget'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area 3',
            'id' => 'footer-3',
            'description' => 'Footer Widget'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area 4',
            'id' => 'footer-4',
            'description' => 'Footer Widget'
        )
    );
}

add_action('widgets_init', 'labb1_widgets');
