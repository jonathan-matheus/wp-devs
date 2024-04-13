<?php
function wpdevs_customize($wp_customize)
{
    // 1 Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        [
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        ]
    );

    $wp_customize->add_setting(
        'set_copyright',
        [
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'set_copyright',
        [
            'label' => 'Copyright Information',
            'description' => 'Please, type your copyright here',
            'section' => 'sec_copyright',
            'type' => 'text'
        ]
    );

    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        [
            'title' => 'Hero Settings'
        ]
    );

    $wp_customize->add_setting(
        'set_hero_title',
        [
            'type' => 'theme_mod',
            'default' => 'Please, add some title',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'set_hero_title',
        [
            'label' => 'Hero Title',
            'description' => 'Please, type your hero title here',
            'section' => 'sec_hero',
            'type' => 'text'
        ]
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        [
            'type' => 'theme_mod',
            'default' => 'Please, add some subtitle',
            'sanitize_callback' => 'sanitize_textarea_field'
        ]
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        [
            'label' => 'Hero Subtitle',
            'description' => 'Please, type your hero subtitle here',
            'section' => 'sec_hero',
            'type' => 'textarea'
        ]
    );

    // Button Text
    $wp_customize->add_setting(
        'set_hero_button_text',
        [
            'type' => 'theme_mod',
            'default' => 'Learn More',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        [
            'label' => 'Hero Button Text',
            'description' => 'Please, type your hero button text here',
            'section' => 'sec_hero',
            'type' => 'text'
        ]
    );

    // Button link
    $wp_customize->add_setting(
        'set_hero_button_link',
        [
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        [
            'label' => 'Hero Button Link',
            'description' => 'Please, type your hero button link here',
            'section' => 'sec_hero',
            'type' => 'url'
        ]
    );

    // Hero Height
    $wp_customize->add_setting(
        'set_hero_height',
        [
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        ]
    );

    $wp_customize->add_control(
        'set_hero_height',
        [
            'label' => 'Hero Height',
            'description' => 'Please, type your hero height here',
            'section' => 'sec_hero',
            'type' => 'number'
        ]
    );


    // Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        [
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_background',
            [
                'label' => 'Hero Background',
                'section' => 'sec_hero',
                'mime_type' => 'image'
            ]
        )
    );

    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => 'Blog Section'
        )
    );

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => 'Posts per page',
            'description' => 'How many items to display in the post list?',
            'section' => 'sec_blog',
            'type' => 'number'
        )
    );

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => 'Post categories to include',
            'description' => 'Comma separated values or single category ID',
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => 'Post categories to exclude',
            'description' => 'Comma separated values or single category ID',
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'wpdevs_customize');
