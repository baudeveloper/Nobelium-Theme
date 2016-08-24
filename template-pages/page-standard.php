<?php
/**
 * Template Name: Standard Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nobelium
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main-content" role="main" name="main">

            <!-- Banner -->
            <?php get_template_part( 'template-parts/call-to-action' ); ?>          
                  
            <section id="page-standard" class="content">
                <div class="container">
                    <div class="row">
                        <article>
                            <?php 
                                if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                                endwhile; endif;
                            ?>                            
                        </article>
                    </div>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
