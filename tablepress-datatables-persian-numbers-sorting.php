<?php
/*
Plugin Name: TablePress Extension: DataTables Persian Numbers Sorting
Plugin URI:
Description: Sorts columns containing UTF-8 Farsi numbers
Version: 1.0
Author: WordPress EzPz
Author URI:
*/

/*
 * Register necessary Plugin Filters.
 */
add_filter( 'tablepress_table_js_options', 'tablepress_enqueue_datatables_persian_numbers_sorting_js', 10, 3 );

/**
 * Enqueue JS files.
 *
 * @since 1.0
 *
 * @param array  $js_options    Current JS options.
 * @param string $table_id      Table ID.
 * @param array $render_options Render Options.
 * @return array Modified JS options.
 */
function tablepress_enqueue_datatables_persian_numbers_sorting_js( $js_options, $table_id, $render_options ) {
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	$js_url = plugins_url( "tablepress-datatables-persian-numbers-sorting{$suffix}.js", __FILE__ );
	wp_enqueue_script( 'tablepress-datatables-persian-numbers-sorting', $js_url, array( 'tablepress-datatables' ), '1.1', true );
	return $js_options;
}
