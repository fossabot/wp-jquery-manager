<?php
$jquery_options = $GLOBALS['wp_jquery_manager_plugin_jquery_settings'];
$jquery_migrate_options = $GLOBALS['wp_jquery_manager_plugin_jquery_migrate_settings'];

// jQuery
if ( !empty( $jquery_options['jquery_version'] ) ) {
	// Upgrade previous jQuery settings
	switch ( $jquery_options['jquery_version'] ) { // Check if user has old jQuery settings
		case 'jquery-3.3.0.js':
			// Alter the options array appropriately
			$jquery_options['jquery_version'] = WP_JQUERY_MANAGER_PLUGIN_JQUERY_3X . '.js';
			update_option('wp_jquery_manager_plugin_jquery_settings', $jquery_options); // Update entire array
			break;
		case 'jquery-3.3.0.min.js':
			// Alter the options array appropriately
			$jquery_options['jquery_version'] = WP_JQUERY_MANAGER_PLUGIN_JQUERY_3X . '.min.js';
			update_option('wp_jquery_manager_plugin_jquery_settings', $jquery_options); // Update entire array
			break;
	} // End switch case
}

// jQuery Migrate
if ( !empty( $jquery_migrate_options['jquery_migrate_version'] ) ) {
	// Upgrade previous jQuery Migrate settings
	switch ( $jquery_migrate_options['jquery_migrate_version'] ) { // Check if user has old jQuery Migrate settings
		case 'jquery-migrate-3.0.0.js':
			// Alter the options array appropriately
			$jquery_migrate_options['jquery_migrate_version'] = WP_JQUERY_MANAGER_PLUGIN_JQUERY_MIGRATE_3X . '.js';
			update_option('wp_jquery_manager_plugin_jquery_migrate_settings', $jquery_migrate_options); // Update entire array
			break;
		case 'jquery-migrate-3.0.0.min.js':
			// Alter the options array appropriately
			$jquery_migrate_options['jquery_migrate_version'] = WP_JQUERY_MANAGER_PLUGIN_JQUERY_MIGRATE_3X . '.min.js';
			update_option('wp_jquery_manager_plugin_jquery_migrate_settings', $jquery_migrate_options); // Update entire array
			break;
	} // End switch case
}
