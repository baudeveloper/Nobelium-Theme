<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Nobelium
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- Banner -->
		<?php get_template_part( 'template-parts/call-to-action' ); ?>


			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-search">
							<?php
							if ( have_posts() ) : ?>
								<h2><?php printf( esc_html__( 'Search Results for: %s', 'nobelium' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );
								endwhile;
								the_posts_navigation();
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif; ?>
						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
