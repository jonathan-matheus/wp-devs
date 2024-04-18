<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>
                <?php
                _e('Posted in', 'wp-devs');
                echo get_the_date();
                _e('by', 'wp-devs');
                the_author_posts_link();
                ?>
            </p>
            <p>
                <?php
                _e('Categories', 'wp-devs');
                ?>:
                <?php
                the_category(' ');
                ?>
            </p>
            <p>
                <?php
                the_tags(__('Tags: ', 'wp-devs'));
                ?>
            </p>
        </div>
    </header>
    <div class="content">
        <?php
        the_content();
        wp_link_pages();
        ?>
    </div>
</article>