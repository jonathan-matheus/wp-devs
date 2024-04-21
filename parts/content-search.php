 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <?php if ('post' == get_post_type()) { ?>
             <div class="meta-info">
                 <p>
                     <?php
                        esc_html_e('Posted in', 'wp-devs');
                        echo get_the_date();
                        esc_html_e('by', 'wp-devs');
                        the_author_posts_link();
                        ?>
                 </p>
                 <p>
                     <?php
                        esc_html_e('Categories', 'wp-devs');
                        ?>:
                     <?php
                        the_category(' ');
                        ?>
                 </p>
                 <p>
                     <?php the_tags(esc_html__('Tags: ', 'wp-devs')); ?>
                 </p>
             </div>
         <?php } ?>
     </header>
     <div class="content">
         <?php the_excerpt(); ?>
     </div>
 </article>