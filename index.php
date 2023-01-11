if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( _page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php
		astra_primary_content_top();

		_content_loop();

		_pagination();

		_primary_content_bottom();
		?>
	</div><!-- #primary -->
<?php
if ( _page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();
