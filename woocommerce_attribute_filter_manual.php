<?php
/*
Plugin Name: Woocommerce attribute filter manual
Plugin URI:  http://pauldrage.co.uk
Description: This plugin allows woocommerce stores to apply a 'attribute filter' manual apply step for customers. I.E No auto reloading the page each time an option changes.
Version:     0.1.0
Author:      Paul Drage
Author URI:  http://pauldrage.co.uk
License:     GPL2 etc
License URI: https://
 */

require_once 'class-wc-widget-layered-nav.php';
 
add_action( 'widgets_init', 'wpwoowidgetlayerednavmanual_register_widget' );
 
function wpwoowidgetlayerednavmanual_register_widget() {
    register_widget( 'WC_Widget_Layered_Nav_Manual' );
}

?>