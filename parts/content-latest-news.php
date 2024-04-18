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
                   <?php _e('by', 'wp-devs'); ?>
                   <samp>
                       <?php
                        the_author_posts_link();
                        ?>
                   </samp>

                   <?php if (has_category()) {
                        _e('Categories', 'wp-devs');
                    ?>
                       :
                       <samp><?php the_category(' '); ?></samp>
                   <?php }

                    if (has_tag()) {
                        the_tags(_e('Tags: ', 'wp-devs'));
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