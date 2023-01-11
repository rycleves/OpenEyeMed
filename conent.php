?>
<?php _entry_before(); ?>
<article
<?php
		echo _attr(
			'article-page',
			array(
				'id'    => 'post-' . get_the_id(),
				'class' => join( ' ', get_post_class() ),
			)
		);
		?>
>
	<?php _entry_top(); ?>
	<header class="entry-header <?php astra_entry_header_class(); ?>">
		<?php _get_post_thumbnail(); ?>

		<?php
		_the_title(
			'<h1 class="entry-title" ' . astra_attr(
				'article-title-content-page',
				array(
					'class' => '',
				)
			) . '>',
			'</h1>'
		);
		?>
	</header><!-- .entry-header -->

	<div class="entry-content clear"
		<?php
				echo astra_attr(
					'article-entry-content-page',
					array(
						'class' => '',
					)
				);
				?>
	>

		<?php _entry_content_before(); ?>

		<?php the_content(); ?>

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

	<?php
		a_edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'astra' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>

	<?php _entry_bottom(); ?>

</article><!-- #post-## -->

<?php _entry_after(); ?>
