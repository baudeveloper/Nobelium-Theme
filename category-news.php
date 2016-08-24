<?php
/**
 * Template Name: Archive News
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

            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args = array(
                'posts_per_page' => 2,
                'category_name' => 'news',
                'paged' => $paged,
            );
            
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
        
            <section id="news-listing" class="content">
                <div class="container">
                    <div class="row">
                        <article>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <ul>
                                <li>
                                    <div class="meta">
                                        <small><?php _e( 'Published:' ); ?></small>
                                        <span><?php the_time('F j, Y'); ?></span>
                                    </div>
                                    <div class="entry-content">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm"><?php _e( 'Read Article' ); ?></a>                       
                                    </div>
                                </li>
                            </ul>
                            <?php endwhile; ?>
                        </article>
                    </div>
                    <div class="row">
                    	<div class="col-sm-12">
							<form class="form-inline">
								<div class="form-group">
									<?php if (show_posts_nav()) : ?>
								    <div class="next-posts"><?php next_posts_link('<i class="fa fa-long-arrow-left"></i> Older News') ?></div>
									<?php endif; ?>
								</div>
								<div class="form-group">
									<?php if (show_posts_nav()) : ?>
								    <div class="prev-posts"><?php previous_posts_link('Latest News <i class="fa fa-long-arrow-right"></i>') ?></div>
									<?php endif; ?>
								</div>
							</form>                    		
                    	</div>
                    </div>
                </div>
            </section>            

            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            	<section id="news-listing" class="content">
	                <div class="container">
	                    <div class="row">
	                    	<div class="col-sm-12">
				                <p><?php _e( 'Sorry, No more News available.' ); ?></p>
			                </div>
		                </div>
						<div class="row">
	                    	<div class="col-sm-12">
								<form class="form-inline">
									<div class="form-group">
										<?php if (show_posts_nav()) : ?>
									    <div class="prev-posts"><?php previous_posts_link('Click here for Latest News <i class="fa fa-long-arrow-right"></i>') ?></div>
										<?php endif; ?>
									</div>
								</form>                    		
	                    	</div>
	                    </div>
			        </div>
			    </section>  
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
