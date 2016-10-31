<section id="page-banner" class="not-fullscreen background parallax" data-img-width="1600" data-img-height="1067" data-diff="100">
	<img class="banner-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner.jpg"/>
</section>
<section class="intro-section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if ( is_post_type_archive('financial-news') || is_singular( 'financial-news' ) ) { ?>
					<h1><?php esc_html_e( 'Financial News', 'nobelium' ); ?></h1>
				<?php } else if ( in_category( 'news' ) ) { ?>
					<h1><?php esc_html_e( 'News', 'nobelium' ); ?></h1>
				<?php } else if ( is_404() ) { ?>
					<h1><?php esc_html_e( 'Sorry', 'nobelium' ); ?></h1>
				<?php } else if ( is_search() ) { ?>
					<h1><?php esc_html_e( 'Search', 'nobelium' ); ?></h1>
				<?php } else if ( is_post_type_archive('shareholder-reports') || is_singular( 'shareholder-reports' ) ) { ?>
					<h1><?php esc_html_e( 'Shareholder Reports', 'nobelium' ); ?></h1>
				<?php } else if ( is_post_type_archive('management-ppts') || is_singular( 'management-ppts' ) ) { ?>
					<h1><?php esc_html_e( 'Management Presentations', 'nobelium' ); ?></h1>
				<?php } else { ?>
				<h1><?php the_title(); ?></h1>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
