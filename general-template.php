<?php

/**
 * Template Name: General Template
 */

// Carrega o templete de cabeçalho
get_header(); ?>
<!-- Corpo -->
<img src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" />
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
                            <article>
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                                <?php the_content(); ?>
                            </article>
                        <?php
                        }
                    } else {
                        ?>
                        <p>
                            <?php
                            esc_html_e('Nothing yet to be displayed!', 'wp-devs') ?>
                        </p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- Carrega o template de rodapé -->
<?php get_footer(); ?>