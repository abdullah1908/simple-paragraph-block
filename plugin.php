<?php
/**
 * Plugin Name: Simple Paragraph Block
 * Plugin URI: https://github.com/abdullah1908/gutenberg-simple-paragraph
 * Description: It is a simple paragraph block for Gutenberg
 * Author: abdullahramzan, presstigers
 * Author URI: https://PressTigers.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Simple_Paragraph_Block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';