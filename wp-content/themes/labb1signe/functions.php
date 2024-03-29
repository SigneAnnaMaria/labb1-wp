<?php

// Funktion som lägger till tema support i wp-panel
function labb1_theme_support()
{
    //Lägger till dynamisk sid-titel
    add_theme_support('title-tag');
    //Lägger till möjligheten att lägga till bilder
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'labb1_theme_support');

// Funktion som skapar olika menyer
function labb1_menus()
{
    $locations = array(
        'primary' => "Desktop Top Bar Menu",
        'footer' => "Footer Social Menu",
        'side-menu' => "Sidebar Menu",
        'side-menu-sidor' => "Side Menu Sidor",
        'side-menu-arkiv' => "Side Menu Arkiv",
        'side-menu-kategorier' => "Side Menu Kategorier"
    );

    //Lägger till möjligheten att lägga till meny i wp-panel
    register_nav_menus($locations);
}

add_action('init', 'labb1_menus');

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

//Lägger till dynamiska widgets som finns i backend wp-panel för redigering
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

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Meny',
            'id' => 'sidebar-2',
            'description' => 'Sidebar Meny Widget'
        )
    );
}


add_action('widgets_init', 'labb1_widgets');
