?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'main' ); ?></span>
		<input type="search" class="search-field" <?php echo esc_html( $astra_search_data_attrs ); ?> placeholder="<?php echo esc_html( $astra_search_input_placeholder ); ?>" value="<?php echo esc_attr( $astra_search_input_value ); ?>" name="s" tabindex="-1">
		<?php if ( class_exists( 'Astra_Icons' ) && Astra_Icons::is_svg_icons() ) { ?>
			<button class="search-submit ast-search-submit" aria-label="<?php echo esc_attr__( 'Search Submit', 'astra' ); ?>">
				<span hidden><?php echo esc_html__( 'Search', 'astra' ); ?></span>
				<i><?php Astra_Icons::get_icons( 'search', true ); ?></i>
			</button>
		<?php } ?>
	</label>
	<?php if ( $_search_show_input_submit ) { ?>
		<input type="submit" class="search-submit" value="<?php echo esc_attr__( 'Search', 'astra' ); ?>">
	<?php } ?>
</form>
<?php
