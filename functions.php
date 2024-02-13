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
}
add_action('after_setup_theme', 'wpdevs_config', 0);
