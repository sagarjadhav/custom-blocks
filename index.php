<?php
/**
 * Plugin Name: Custom blocks
 * Author: Sagar
 * Version: 1.0.0
 */

/**
 * Enqueue block assets: Backend.
 */
function wordpress_blocks_starter_enqueue_block_editor_assets() {
	$blocks_dir = basename( __DIR__ ) . '/build/';

	$blocks_asset_file = include plugin_dir_path( dirname( __FILE__ ) ) . $blocks_dir . '/index.asset.php'; // Plugin path: plugin_dir_path( dirname( __FILE__ ) ) . $blocks_dir . '/index.asset.php';

	// Replace "wp-blockEditor" with "wp-block-editor".
	$blocks_asset_file['dependencies'] = array_replace(
		$blocks_asset_file['dependencies'],
		array_fill_keys(
			array_keys( $blocks_asset_file['dependencies'], 'wp-blockEditor' ),
			'wp-block-editor'
		)
	);

	wp_enqueue_script(
		'wordpress-blocks-starter-blocks',
		plugin_dir_url( dirname( __FILE__ ) ) . $blocks_dir . '/index.js',
		$blocks_asset_file['dependencies'],
		$blocks_asset_file['version']
	);
}

add_action( 'enqueue_block_editor_assets', 'wordpress_blocks_starter_enqueue_block_editor_assets' );
