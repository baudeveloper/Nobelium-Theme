<section id="page-banner" class="not-fullscreen background parallax" data-img-width="1600" data-img-height="1067" data-diff="100">
	<img class="banner-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner.jpg"/>
</section>
<section class="intro-section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if ( is_post_type_archive('financial-news') ) { ?>
					<h1><?php post_type_archive_title(); ?></h1>
				<?php } else if ( in_category( 'news' ) ) { ?>
					<h1><?php esc_html_e( 'News', 'nobelium' ); ?></h1>
				<?php } else if ( is_404() ) { ?>
					<h1><?php esc_html_e( 'Sorry', 'nobelium' ); ?></h1>
				<?php } else if ( is_search() ) { ?>
					<h1><?php esc_html_e( 'Search', 'nobelium' ); ?></h1>
				<?php } else if ( is_post_type_archive('shareholder-reports') ) { ?>
					<h1><?php post_type_archive_title(); ?></h1>
				<?php } else if ( is_post_type_archive('management-ppts') ) { ?>
					<h1><?php post_type_archive_title(); ?></h1>
				<?php } else { ?>
				<h1><?php the_title(); ?></h1>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
