<!-- Carrega o templete de cabeçalho -->
<?php get_header(); ?>
<!-- Corpo -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" />
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('parts/content', 'page');
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- Carrega o template de rodapé -->
<?php get_footer(); ?>