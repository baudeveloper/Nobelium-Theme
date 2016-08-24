<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nobelium
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Banner -->
			<?php get_template_part( 'template-parts/call-to-action' ); ?>	

			<div class="container">
				<div class="row">
					<section class="error-404 not-found"> 
						<div class="col-sm-12">
							<?php printf( __( '<h4><strong>Nobelium</strong> apologizes that you ended up here.</h4>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<hr>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p>The page you are looking for no longer exist or has been moved. The best course of action would be to use the links below: you can browse through these hand-picked links as your guide.</p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/"><i class="fa fa-long-arrow-right"></i> Home</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/about-us/"><i class="fa fa-long-arrow-right"></i> About Us</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/acquisition-criteria/"><i class="fa fa-long-arrow-right"></i> Acquisition Criteria</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/news/"><i class="fa fa-long-arrow-right"></i> News</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/investor-relations/"><i class="fa fa-long-arrow-right"></i> Investor Relations</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/financial-news/"><i class="fa fa-long-arrow-right"></i> Financial News Releases</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/shareholder-reports/"><i class="fa fa-long-arrow-right"></i> Shareholder Reports</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/management-ppts/"><i class="fa fa-long-arrow-right"></i> Management Presentations</a></p>', 'nobelium' ), '/' ); ?>
							<?php printf( __( '<p><a href="/contact-us/"><i class="fa fa-long-arrow-right"></i> Contact Us</a></p>', 'nobelium' ), '/' ); ?>
						</div>
					</section>
				</div><!-- .row -->
			</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
