<?php
/**
 * Block styles.
 *
 * @package mercisuzanne
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function mercisuzanne_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'mercisuzanne-flat-button',
			'label' => __( 'Flat button', 'mercisuzanne' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'mercisuzanne-navigation-button',
			'label' => __( 'Button style', 'mercisuzanne' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'mercisuzanne-list-underline',
			'label' => __( 'Underlined list items', 'mercisuzanne' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'mercisuzanne-box-shadow',
			'label' => __( 'Box shadow', 'mercisuzanne' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'mercisuzanne-box-shadow',
			'label' => __( 'Box shadow', 'mercisuzanne' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'mercisuzanne-box-shadow',
			'label' => __( 'Box shadow', 'mercisuzanne' ),
		)
	);
}
add_action( 'init', 'mercisuzanne_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function mercisuzanne_unregister_block_style() {
	wp_enqueue_script(
		'mercisuzanne-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		MERCISUZANNE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'mercisuzanne_unregister_block_style' );
