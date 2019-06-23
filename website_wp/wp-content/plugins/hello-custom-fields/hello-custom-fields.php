<?php
/**
 * Created by PhpStorm.
 * Plugin Name : User Custom Field
 * User: deval
 * Date: 6/21/2019
 * Time: 12:11 AM
 */

function hcf_register_metabox() {
    add_meta_box( 'hcf-metabox', 'Hello Metabox', 'hcf_metabox_display', 'post' );

}
add_action( 'add_meta_boxes', 'hcf_register_metabox' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function hcf_metabox_display() {
    include plugin_dir_path(__FILE__) . 'user.php';
}
