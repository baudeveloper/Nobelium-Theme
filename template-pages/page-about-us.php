<?php
/**
 * Template Name: About Us
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

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7">
                        <section name="company" id="company" class="content">
                            <article>
                                <h2><?php the_field('company_title'); ?></h2>
                                <?php the_field('company_content'); ?>
                            </article>
                        </section>
                        <section name="mission" id="mission" class="content">
                            <article>
                                <h2><?php the_field('mission_title'); ?></h2>
                                <?php the_field('mission_content'); ?>
                            </article>
                        </section>
                    </div>
                    <div class="col-sm-4 col-md-offset-1">
                        <aside>                            
                            <section name="lates-news" id="lates-news" class="widget">
                                <?php dynamic_sidebar( 'sidebar-default' ); ?>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>   

            <section name="management" id="management" class="content">
                <div class="container">
                    <div class="row">
                        <article>
                            <h2><?php the_field('management_title'); ?></h2>
                            <?php if( have_rows('team_member_repeater') ): ?>
                                <?php 
                                    while( have_rows('team_member_repeater') ): the_row();
                                    $image = get_sub_field('member_image');
                                ?>                                      
                                <div class="media">
                                    <div class="media-left">
                                        <?php if( !empty($image) ): ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="media-body">
                                        <?php the_sub_field('member_content'); ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </article>
                    </div>
                </div>
            </section>  
                          
            <div id="conntected_dots" class="fullscreen background parallax" data-img-width="1600" data-img-height="1067" data-diff="100">
                <section name="acquisition" id="acquisition" class="content">
                    <div class="container">
                        <div class="row">
                            <article>
                                <a href="<?php the_field('acquisition_button_hyperlink'); ?>" class="btn btn-secondary outline btn-block btn-lg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svgs/criteria_icon.svg"> <span><?php the_field('acquisition_button_text'); ?></span>
                                </a>
                            </article>
                        </div>
                    </div>
                </section>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
