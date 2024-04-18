<article>
    <header>
        <h1>
            <?php the_title(); ?>
        </h1>
    </header>
    <?php
    the_content();
    wp_link_pages();
    ?>
</article>