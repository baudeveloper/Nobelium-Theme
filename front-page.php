<?php
/**
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Nobelium
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <main id="main-content" role="main" name="main">

            <section id="main-banner" class="not-fullscreen background parallax carousel slide carousel-fade" data-img-width="1600" data-img-height="1067" data-diff="100" data-interval="7000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php 
                        $i=0;
                        while( have_rows('slider') ): the_row();
                        if ($i == 0) {
                            echo '<li data-target="#main-banner" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#main-banner" data-slide-to="'.$i.'"></li>';
                        }
                        $i++;
                        endwhile; 
                    ?>
                </ol>
                <div class="carousel-inner">
                    <?php                    
                        $z = 0;
                        while( have_rows('slider') ): the_row();
                        $image = get_sub_field('slider_image');
                        $heading = get_sub_field('slider_heading');
                        $headingProperty = get_sub_field('slider_heading_property');
                        $tagline = get_sub_field('slider_tagline');
                    ?>
                    <div class="item <?php if ($z==0) { echo 'active';} ?>">
                        <div class="tagline container <?php echo $headingProperty; ?>">
                            <div class="row">
                                <div class="tagline-content animated fadeInDown">
                                    <h1><?php echo $heading; ?></h1>   
                                    <hr>    
                                    <h2><?php echo $tagline; ?></h2>                            
                                </div>
                            </div>
                        </div>   
                        <img class="banner-bg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />                            
                    </div>
                    <?php 
                        $z++;
                        endwhile; 
                    ?>    
                </div>
                <a href="#main-banner" class="left carousel-control" data-slide="prev">
                    <span class="icon-prev fa-stack fa-lg">
                        <i class="fa fa-chevron-left fa-stack-1x"></i>
                    </span>
                </a>
                <a href="#main-banner" class="right carousel-control" data-slide="next">
                    <span class="icon-next fa-stack fa-lg">
                        <i class="fa fa-chevron-right fa-stack-1x"></i>
                    </span>
                </a>
            </section>
              
            <section class="featured-cards clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="well">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svgs/software_icon.svg" class="animated zoomIn" alt="Who We Are">
                                <?php the_field('left_featured_card'); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="well">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svgs/criteria_icon.svg" class="animated zoomIn" alt="Acquisition Criteria">
                                <?php the_field('middle_featured_card'); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="well">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svgs/investor_icon.svg" class="animated zoomIn" alt="Investor Relations">
                                <?php the_field('right_featured_card'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
