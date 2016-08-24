<?php
/**
 * Template Name: News
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

            <?php

            $args = array(
                'category_name' => 'news',
            );

            $the_query = new WP_Query( $args ); ?>

            <?php if ( have_posts() ) : ?>

            <div class="container">
                <div class="row">
                    <section class="single-posting">
                        <article>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <h2><?php the_title(); ?></h2>
                                <p class="publish-date"><strong><?php _e( 'Published:' ); ?></strong> <span><?php the_time('F j, Y'); ?></span></p>
                                <p class="back-to-news"><strong><?php _e( 'Navigate:' ); ?></strong> <?php printf( __( '<a href="/category/news/">Back to News Archive</a>', 'nobelium' ), '/' ); ?></p>
                                <?php the_content(); ?>                   
                                <?php the_post_navigation(); ?>
                            <?php endwhile; ?>
                        </article>
                        <aside>
                            <section name="lates-news" id="lates-news" class="widget">
                                <?php dynamic_sidebar( 'sidebar-default' ); ?>
                            </section>
                        </aside>
                    </section>
                </div>
            </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
