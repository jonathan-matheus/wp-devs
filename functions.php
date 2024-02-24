<?php

/**
 * Carrega as folhas de estilo do tema
 *
 * @return void
 */
function wpdevs_load_scripts()
{
    /**
     * Carrega a folha de estilo do principal do tema.
     * 
     * A função filemtime() e usada para lidar com o cach do navegador durante o
     * desenvolvimento do thema
     * 
     * Ela retorna um timestamp da ultima modificação do arquivo
     * 
     * Fazendo com que o navegador acabe interpretando a folha de estilo como um
     * novo arquivo a cada vez que ele e modificada
     */
    wp_enqueue_style(
        'wpdevs-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_stylesheet_directory() . '/style.css'),
        'all'
    );

    /**
     * Carrega a fonte Poppins, a partir da api do google fonts, trazendo os 
     * seguintes pesos:
     * - 400
     * - 700
     */
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap',
        [],
        null,
        'all'
    );

    wp_enqueue_script(
        'dropdown',
        get_template_directory_uri() . '/js/dropdown.js',
        [],
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

function wpdevs_config()
{
    register_nav_menus([
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    ]);

    add_theme_support(
        'custom-header',
        [
            'height' => 225,
            'width' => 1920
        ]
    );

    add_theme_support(
        'post-thumbnails'
    );

    add_theme_support(
        'custom-logo',
        [
            'width' => 200,
            'height' => 110,
            'flex-width' => true,
            'flex-height' => true
        ]
    );
}
add_action('after_setup_theme', 'wpdevs_config', 0);

function wpdevs_sidebars()
{
    register_sidebar(
        [
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the blog Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => 'Service 1',
            'id' => 'services-1',
            'description' => 'First Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => 'Service 2',
            'id' => 'services-2',
            'description' => 'Second Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => 'Service 3',
            'id' => 'services-3',
            'description' => 'Third Service Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );
}

add_action('widgets_init', 'wpdevs_sidebars');
