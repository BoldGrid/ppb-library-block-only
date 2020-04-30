<?php
/**
 * Plugin Name: Post and Page Builder - Library Blocks Only
 * Plugin URI: https://www.boldgrid.com/boldgrid-editor/
 * Description: Customized drag and drop editing for posts and pages. The Post and Page Builder adds functionality to the existing TinyMCE Editor to give you easier control over your content.
 * Version: 1.0.0
 * Author: BoldGrid <support@boldgrid.com>
 * Author URI: https://www.boldgrid.com/
 * Text Domain: boldgrid-editor
 * Domain Path: /languages
 * License: GPLv2 or later
 */

// Prevent direct calls.
if ( ! defined( 'WPINC' ) ) {
	die();
}

add_action( 'boldgrid_editor_scripts_builder', function() {
	wp_add_inline_style( 'common', "
		.boldgrid-gridblock-industry {
			display: none !important;
		}

		.boldgrid-gridblock-categories option {
			display: none;
		}

		.boldgrid-gridblock-categories option[value='saved'],
		.boldgrid-gridblock-categories option[value='library'] {
			display: block;
		}
	" );

	wp_add_inline_script( 'boldgrid-editor-drag', "
		if ( BOLDGRID && BOLDGRID.EDITOR ) {
			BOLDGRID.EDITOR.GRIDBLOCK.Category.currentCategory = 'library';
		}
	" );
} );
