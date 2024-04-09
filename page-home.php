       <!-- Carrega o templete de cabeçalho -->
       <?php get_header(); ?>
       <!-- Corpo -->
       <div id="content" class="site-content">
           <div id="primary" class="content-area">
               <main id="main" class="site-main">
                   <section class="hero">
                       Hero
                   </section>
                   <section class="services">
                       <h2>Services</h2>
                       <div class="container">
                           <div class="services-item">
                               <?php
                                if (is_active_sidebar('services-1')) {
                                    dynamic_sidebar('services-1');
                                }
                                ?>
                           </div>
                           <div class="services-item">
                               <?php
                                if (is_active_sidebar('services-2')) {
                                    dynamic_sidebar('services-2');
                                }
                                ?>
                           </div>
                           <div class="services-item">
                               <?php
                                if (is_active_sidebar('services-3')) {
                                    dynamic_sidebar('services-3');
                                }
                                ?>
                           </div>
                       </div>
                   </section>
                   <section class="home-blog">
                       <h2>Latest News</h2>
                       <div class="container">
                           <?php
                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'category__in' => [9, 8, 12],
                                'category__not_in' => [1],
                            ];

                            $postlist = new WP_Query($args);

                            if ($postlist->have_posts()) {
                                while ($postlist->have_posts()) {
                                    $postlist->the_post();
                                    get_template_part('parts/content', 'latest-news');
                                }
                            } else {
                            ?>
                               <p>Nothing yet to be displayed!</p>
                           <?php
                            }
                            wp_reset_postdata();
                            ?>
                       </div>

                   </section>
               </main>
           </div>
       </div>
       <!-- Carrega o template de rodapé -->
       <?php get_footer(); ?>