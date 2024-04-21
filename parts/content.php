<article>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <?php if (has_post_thumbnail()) { ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail([275, 275]); ?>
        </a>
    <?php } ?>

    <div class="meta-info">
        <p>
            <?php
            esc_html_e('Posted in', 'wp-devs');
            echo get_the_date();
            esc_html_e('by', 'wp-devs');
            the_author_posts_link();
            ?>
        </p>

        <?php if (has_category()) { ?>
            <p>
                <?php
                esc_html_e('Categories: ', 'wp-devs');
                the_category(' ');
                ?>
            </p>
        <?php } ?>

        <?php if (has_tag()) { ?>
            <p><?php the_tags(esc_html__('Tags: ')); ?></p>
        <?php } ?>
    </div>
    <?php the_excerpt(); ?>
</article>