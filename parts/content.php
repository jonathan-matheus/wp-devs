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
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>

        <?php if (has_category()) { ?>
            <p>Categories: <?php the_category(' '); ?></p>
        <?php } ?>

        <?php if (has_tag()) { ?>
            <p><?php the_tags('Tags: '); ?></p>
        <?php } ?>
    </div>
    <?php the_excerpt(); ?>
</article>