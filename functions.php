<?php
require(get_template_directory() . '/inc/customizer.php');

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

/**
 * Configurações como registro de menu, e adicionando suportes ao tema.
 */
function wpdevs_config()
{
    $textdomain = 'wp-devs';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus([
        'wp_devs_main_menu' => __('Main Menu', 'wp-devs'),
        'wp_devs_footer_menu' => __('Footer Menu', 'wp-devs')
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

    add_theme_support(
        'title-tag'
    );

    add_theme_support(
        'automatic-feed-links'
    );

    add_theme_support(
        'html5',
        [
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ]
    );
}
add_action('after_setup_theme', 'wpdevs_config', 0);

/**
 * Registra os sidebars
 */
function wpdevs_sidebars()
{
    register_sidebar(
        [
            'name' => __('Blog Sidebar', 'wp-devs'),
            'id' => 'sidebar-blog',
            'description' => __('This is the blog Sidebar. You can add your widgets here.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => __('Service 1', 'wp-devs'),
            'id' => 'services-1',
            'description' => __('First Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => __('Service 2', 'wp-devs'),
            'id' => 'services-2',
            'description' => __('Second Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );

    register_sidebar(
        [
            'name' => __('Service 3', 'wp-devs'),
            'id' => 'services-3',
            'description' => __('Third Service Area', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        ]
    );
}

add_action('widgets_init', 'wpdevs_sidebars');

/**
 * Essa função verifica se a função wp_body_open() existe.
 * 
 * Caso ela não exista, ela adiciona a função.
 * 
 * Observação: O intuito desta função é adicionar o wp_body_open() quando o ela
 * não existir, essa função em questão foi implementada no WordPress a partir da 
 * versão 5.2, e para manter a compatibilidade com as versões anteriores, essa
 * função foi adicionada.
 */
if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
