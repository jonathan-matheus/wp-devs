       <!-- Carrega o templete de cabeçalho -->
       <?php get_header(); ?>
       <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" />
       <!-- Corpo -->
       <div id="content" class="site-content">
           <div id="primary" class="content-area">
               <main id="main" class="site-main">
                   <h1>Blog</h1>
                   <div class="container">
                       <div class="blog-items">
                           <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                            ?>
                                   <article>
                                       <h2>
                                           <?php the_title(); ?>
                                       </h2>
                                       <?php the_post_thumbnail([275, 275]); ?>
                                       <div class="meta-info">
                                           <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                           <p>Categories: <?php the_category(' '); ?></p>
                                           <p><?php the_tags('Tags: '); ?></p>
                                       </div>
                                       <?php the_content(); ?>
                                   </article>
                               <?php
                                }
                            } else {
                                ?>
                               <p>Nothing yet to be displayed!</p>
                           <?php
                            }
                            ?>
                       </div>
                       <?php get_sidebar(); ?>
                   </div>
               </main>
           </div>
       </div>
       <!-- Carrega o template de rodapé -->
       <?php get_footer(); ?>