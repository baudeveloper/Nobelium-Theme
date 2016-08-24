<?php
/**
 * Template Name: Contact Us
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

    		<section id="contact-us" class="content">
                <div class="container">
                    <div class="row">
                        <article>
                            <?php
                                if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                                endwhile; endif;
                            ?>
                        </article>
                        <aside>
                            <?php printf( __( '<h2>Send Us a Message</h2>', 'nobelium' ), '/' ); ?>
														<?php gravity_form(1, false, false, false, '', false, 12); ?>
                        </aside>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
