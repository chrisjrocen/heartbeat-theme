<?php

/**
 * Define constants
 */


/**
 * Enqueue styles and scripts
 */
function kc_enqueue_scripts()
{
	wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/assets/build/css/styles.css');

}

add_action('wp_enqueue_scripts', 'kc_enqueue_scripts');

/**
 * Check for ACF PRO
 */
if (!class_exists('ACF')) {
	//display notice
	function acf_not_active_notice()
	{
		?>
		<div class="notice notice-success is-dismissible">
			<p>
				<?php _e('Inorder to function, Hearbeat theme requires ACF PRO to be active', 'sample-text-domain'); ?>
			</p>
		</div>
		<?php
	}
	add_action('admin_notices', 'acf_not_active_notice');
}