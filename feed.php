?>
<div <?php _blog_layout_class( 'blog-layout-1' ); ?>>
	<div class="post-content <?php echo _attr( 'ast-grid-common-col' ); ?>" >
		<?php _blog_post_thumbnail_and_title_order(); ?>
		<div class="entry-content clear"
		<?php
				echo _attr(
					'article-entry-content-blog-layout',
					array(
						'class' => '',
					)
				);
				?>
		>
			<?php
				_entry_content_before();
				_the_excerpt();
				_entry_content_after();

				wp_link_pages(
					array(
						'before'      => '<div class="page-links">' . esc_html( _default_strings( 'string-blog-page-links-before', false ) ),
						'after'       => '</div>',
						'link_before' => '<span class="page-link">',
						'link_after'  => '</span>',
					)
				);
				?>
		</div><!-- .entry-content .clear -->
	</div><!-- .post-content -->
</div> <!-- .blog-layout-1 -->
