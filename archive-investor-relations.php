<?php
/**
 * Template Name: Archive Investor Relations
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

            <section name="ticker" id="ticker" class="content">
                <div class="container">
                    <div class="row">
                        <article>
                            <div class="well">
                                <?php the_field('ir_stock_ticker'); ?>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section name="dashboard" id="dashboard" class="content">
                <div class="container">
                    <div class="row">
                        <section id="factsheets" class="widget">
                            <h2><?php the_field('left_sidebar_title'); ?></h2>
                            <ul>
                                <li>
                                    <a href="<?php the_field('left_sidebar_link'); ?>" target="_blank">
                                        <?php the_field('left_sidebar_content'); ?>
                                        <?php
                                            $image = get_field('left_sidebar_image');
                                            if( !empty($image) ):
                                        ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php endif; ?>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <div class="col-sm-8">
                        <div class="row">
                            <section id="fi-news-feed" class="widget">
                                <?php dynamic_sidebar( 'sidebar-ir' ); ?>
                            </section>
                            <!-- <section id="shareholder-reports" class="widget"> -->
                                <?php //dynamic_sidebar( 'sidebar-sr' ); ?>
                            <!-- </section> -->
                            <section id="management-presentations" class="widget">
                                <?php dynamic_sidebar( 'sidebar-mp' ); ?>
                            </section>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
