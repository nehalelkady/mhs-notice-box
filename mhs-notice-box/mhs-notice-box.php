<?php

/*
Plugin Name: MHS Single Notice Box
Description: Plugin to display a single notice box using shortcode.
Version: 1.0
Author: Nehal Hussein
License: GPLv2 or later
*/

// Exit plugin execution if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
 *	Load MHS Notice Box Options CSS & JS files
 */
function mhs_notice_box_enqueue() {
    wp_register_script( 'mhs_notice_box_js', plugins_url('mhs-notice-box.js', __FILE__), array('jquery') );
    wp_enqueue_script( 'mhs_notice_box_js' );

    wp_register_style( 'mhs_notice_box_css', plugins_url('mhs-notice-box.css', __FILE__) );
    wp_enqueue_style( 'mhs_notice_box_css' );
}

add_action('wp_head', 'mhs_notice_box_enqueue');

/*
 *	MHS Notice Box Options page in the admin menu
 */
function mhs_notice_box_options_page() {
    add_menu_page(
        'MHS Notice Box',
        'MHS Notice Box Options',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php',
        null,
        'dashicons-info',
        20
    );
}

add_action( 'admin_menu', 'mhs_notice_box_options_page' );

/*
 *	MHS Notice Box Shortcode
 *  [mhsnotice] OR [mhsnotice type="info" text="This text will replace the default"]
 *
 *	type = danger, success, info, warning
 *	text = ""
 *
 */
function mhsnotice_func($atts, $content) {
     extract(shortcode_atts(array(
	      'type' => 'info',
		    'text' => '',
     ), $atts));

     if ( strlen( $text ) === 0 ) {
       switch ($type) {
          case 'danger':
            $text = "Indicates a dangerous or potentially negative action";
            break;
          case 'success':
            $text = "Indicates a successful or positive action";
            break;
          case 'info':
              $text = "Indicates a neutral informative change or action";
              break;
          case 'warning':
            $text = "Indicates a warning that might need attention";
            break;
        }
    }

	return '<div class="mhs-notice-box '.$type.'">
      <a href="javascript:void(0)" class="mhs-notice-close">&times;</a>
			'.'<b>'.ucfirst($type).'!</b> '.$text.'
	</div>';

} // mhsnotice_func

add_shortcode('mhsnotice', 'mhsnotice_func');
