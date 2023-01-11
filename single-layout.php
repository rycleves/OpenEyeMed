?>

<div <?php _blog_layout_class( 'single-layout-1' ); ?>>

	<?php _single_header_before(); ?>

	<header class="entry-header <?php _entry_header_class(); ?>">

		<?php _single_header_top(); ?>

		<?php _blog_post_thumbnail_and_title_order(); ?>

		<?php _single_header_bottom(); ?>

	</header><!-- .entry-header -->

	<?php _single_header_after(); ?>

	<div class="entry-content clear"
	<?php
				echo _attr(
					'article-entry-content-single-layout',
					array(
						'class' => '',
					)
				);
				?>
	>

		<?php _entry_content_before(); ?>

		<?php the_content(); ?>

		<?php
			_edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'astra' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>

		<?php _entry_content_after(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html( _default_strings( 'string-single-page-links-before', false ) ),
					'after'       => '</div>',
					'link_before' => '<span class="page-link">',
					'link_after'  => '</span>',
				)
			);
			?>
	</div><!-- .entry-content .clear -->
</div>
