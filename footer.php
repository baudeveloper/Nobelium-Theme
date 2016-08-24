<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nobelium
 */

?>
        <!-- Footer -->
        <footer id="main-footer" role="contentinfo">
          <div class="container">
            <div class="row">
                <div class="col-sm-6 copyright-legal">                    
                    <small>
                        <?php echo date('Y'); ?> 
                        <?php the_field('copyright', 'option'); ?> 
                        <br/>
                        <?php the_field('footer_links', 'option'); ?>                        
                    </small>
                </div>
                <div class="col-sm-6 credit">                    
                    <small>
                        <?php the_field('designer_info', 'option'); ?>
                    </small>
                </div>
            </div>
          </div>
        </footer>
      </section><!--  end of #page-wrapper -->
    </div><!-- #page -->
    <?php wp_footer(); ?>
    </body>
</html>
