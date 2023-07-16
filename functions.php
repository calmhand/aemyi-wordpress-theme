<?php
// Adds dynamic title tag support
function aemyi_theme_support() {
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
    add_theme_support('post-formats',
        array(
            'gallery',
            'image',
            'video',
        )
    );
}
add_action("after_setup_theme", "aemyi_theme_support");

function aemyi_customCSS() {
    if (is_page('flashes')) {
        wp_enqueue_style( 'Flashes', get_template_directory_uri() . '/assets/css/SkinToneController.css' );
        wp_enqueue_style( 'SkinToneController', get_template_directory_uri() . '/assets/css/Flashes.css' );
        wp_enqueue_script("changeBackground", get_template_directory_uri() . '/assets/js/ChangeBackground.js');
    }

    if (is_page('booking')) { 
        wp_enqueue_style( 'Booking', get_template_directory_uri() . '/assets/css/Booking.css' );
    }

    if (is_page('about')) { 
        wp_enqueue_style( 'About', get_template_directory_uri() . '/assets/css/About.css' );
        wp_enqueue_style('About');
    }

    if (is_page('fine-art')) { 
        wp_enqueue_style( 'Fine-Art', get_template_directory_uri() . '/assets/css/fineart.css' );
        wp_enqueue_style('Fine-Art');
    }

    if (is_page('tattoos')) { 
        wp_enqueue_style( 'Tattoos', get_template_directory_uri() . '/assets/css/Tattoos.css' );
        wp_enqueue_style('Tattoos');
    }

    if (is_page('press')) { 
        wp_enqueue_style( 'Press', get_template_directory_uri() . '/assets/css/Press.css' );
        wp_enqueue_style('Press');
    }
}
add_action("wp_enqueue_scripts", "aemyi_customCSS");

// When WP enqueues scripts, run the custom-made one as well.
function aemyi_registerResources() {
    $version = wp_get_theme() -> get("version");
    wp_enqueue_style("aemyi-styles", get_stylesheet_uri(), $version, "all");
}
add_action("wp_enqueue_scripts", "aemyi_registerResources");


// Widget Locations
function aemyi_initWidgets() {
    register_sidebar(array(
        'name' => 'Flash Posts',
        'id' => 'flashposts1'
    ));
}
add_action("widgets_init", 'aemyi_initWidgets');

?>