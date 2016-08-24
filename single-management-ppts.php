<?php
/**
 * Template Name: Management Presentation
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
                'post_type' => 'management-ppts',
            );

            $the_query = new WP_Query( $args ); ?>

            <?php if ( have_posts() ) : ?>

            <section id="news-listing" class="content">
                <div class="container">
                    <div class="row">
                        <article>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <ul>
                                <li>
                                    <div class="meta">
                                        <small><?php _e( 'Published:' ); ?></small>
                                        <span><?php the_time('F j, Y'); ?></span>
                                    </div>
                                    <div class="entry-content">
                                        <h2><?php the_title(); ?></h2>
                                        <?php $file = get_field('management_presentations');
                                        if( $file ): ?>
                                            <a target="_blank" class="btn btn-primary btn-default" href="<?php echo $file['url']; ?>"><?php _e( 'View Presentation' ); ?></a>
                                        <?php endif; ?>
                                        <?php printf( __( '<a class="btn btn-primary btn-default" href="/management-ppts/"><i class="fa fa-long-arrow-left"></i> Back to Management Presentations</a>', 'nobelium' ), '/' ); ?>
                                    </div>
                                </li>
                            </ul>
                            <?php endwhile; ?>
                        </article>
                    </div>
                </div>
            </section>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
