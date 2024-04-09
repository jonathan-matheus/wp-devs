       <article class="latest-news">
           <?php if (has_post_thumbnail()) { ?>
               <a href="<?php the_permalink(); ?>">
                   <?php the_post_thumbnail('large'); ?>
               </a>
           <?php } ?>
           <h3>
               <a href="<?php the_permalink(); ?>">
                   <?php the_title(); ?>
               </a>
           </h3>
           <div class="meta-info">
               <p>
                   by <samp><?php the_author_posts_link(); ?></samp>

                   <?php if (has_category()) { ?>
                       Categories: <samp><?php the_category(' '); ?></samp>
                   <?php }

                    if (has_tag()) {
                        the_tags('Tags: ');
                    }
                    ?>
               </p>
           </div>
           <p>
               <samp>
                   <?php echo get_the_date(); ?>
               </samp>
           </p>
           <?php the_excerpt(); ?>
       </article>