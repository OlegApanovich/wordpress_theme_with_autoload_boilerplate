<?php
require __DIR__ . '/vendor/autoload.php';

/**
 * add styles and scripts
 *
 * @param
 *
 * @return void
 */
function imp_scripts_init_accord() {
	// Load our main stylesheet.
	wp_enqueue_style( 'child-theme', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'imp_scripts_init_accord');

/**
 * Just for a initial testing purpose
 */
function testint_autoload_classes() {
	new ThemeDev\FooBar;

	new ThemeDev\SubfolderSubfolder\Bar;
}
add_action('init', 'testint_autoload_classes');

