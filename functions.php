<?php
/**
 * Functions File
 *
 * Loads theme functions
 * Defines constants
 *
 * @package RoloPress
 * @subpackage Functions
 */

// Define constant paths
define( ROLOPRESS_DIR, TEMPLATEPATH );
define( ROLOPRESS_LIBRARY, ROLOPRESS_DIR . '/library' );
define( ROLOPRESS_EXTENSIONS, ROLOPRESS_LIBRARY . '/extensions' );
define( ROLOPRESS_FUNCTIONS, ROLOPRESS_LIBRARY . '/functions' );
define( ROLOPRESS_SETUP, ROLOPRESS_LIBRARY . '/setup' );
define( ROLOPRESS_WIDGETS, ROLOPRESS_LIBRARY . '/widgets' );
define( ROLOPRESS_INCLUDES, ROLOPRESS_LIBRARY . '/includes' );

// Define constant paths (other file types)
$rolopress_dir = get_bloginfo( 'template_directory' );
define( ROLOPRESS_IMAGES, $rolopress_dir . '/library/images' );
define( ROLOPRESS_CSS, $rolopress_dir . '/library/styles' );
define( ROLOPRESS_JS, $rolopress_dir . '/library/js' );

// Define child theme paths
define( ROLOPRESS_CHILD_DIR, get_stylesheet_directory() );
define( ROLOPRESS_CHILD_URL, get_stylesheet_directory_uri() );

// Load compatability function
require_once( ROLOPRESS_FUNCTIONS . '/compat.php' );

// Load action hooks
require_once( ROLOPRESS_FUNCTIONS . '/hooks-actions.php' );

// Run default setup
require_once( ROLOPRESS_SETUP . '/setup-fields.php' );

// Code based on http://www.nabble.com/Activation-hook-exist-for-themes--td25211004.html
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
    require_once( ROLOPRESS_SETUP . '/add-pages.php' );
}

// Load RoloPress functions
require_once( ROLOPRESS_FUNCTIONS . '/template-functions.php' );
require_once( ROLOPRESS_FUNCTIONS . '/contact-functions.php' );
require_once( ROLOPRESS_FUNCTIONS . '/company-functions.php' );
require_once( ROLOPRESS_FUNCTIONS . '/note-functions.php' );
require_once( ROLOPRESS_FUNCTIONS . '/dynamic-classes.php' );

// Load widget areas and custom widgets
require_once( ROLOPRESS_FUNCTIONS . '/widgets.php' );

// Load extensions
require_once( ROLOPRESS_EXTENSIONS . '/rolosearch/rolosearch.php' );
require_once( ROLOPRESS_EXTENSIONS . '/query-multiple-taxonomies/query-multiple-taxonomies.php' );

// Load javascript - only if user has proper permissions
if ( current_user_can('edit_posts') ) { require_once( ROLOPRESS_INCLUDES . '/js-load.php' ); }

// Change admin section to RoloPress style
if (function_exists ('login_header') || is_admin()) // only load if viewing admin
    require_once( ROLOPRESS_FUNCTIONS . '/admin.php' );

?>