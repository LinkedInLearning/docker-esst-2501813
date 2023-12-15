<?php
/**
Plugin Name: Hello World Plugin
Plugin URI: http://yourwebsite.com/hello-world-plugin
Description: This is a simple hello world WordPress plugin
Version: 1.0
Author: Your Name
Author URI: http://yourwebsite.com

@package MyPlugin
 */

namespace MyPlugin;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Access denied.' );
}

/**
 * Outputs "Hello, World!" in the footer of all pages.
 */
function hello_world() {
	echo '<p>Hello, World!</p>';
}

add_action( 'wp_footer', 'hello_world' );
