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
                   <?php esc_html_e('by', 'wp-devs'); ?>
                   <samp>
                       <?php
                        the_author_posts_link();
                        ?>
                   </samp>

                   <?php if (has_category()) {
                        esc_html_e('Categories', 'wp-devs');
                    ?>
                       :
                       <samp><?php the_category(' '); ?></samp>
                   <?php }

                    if (has_tag()) {
                        the_tags(esc_html__('Tags: ', 'wp-devs'));
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