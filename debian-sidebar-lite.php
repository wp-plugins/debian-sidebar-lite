<?php
/**
 * @package debian-sidebar-lite
 * @version 0.1
 */
/*
Plugin Name: Debian sidebar lite
Plugin URI: http://wordpress.org/plugins/debian-sidebar-lite
Description: When activated, this plugin will put a Debian sidebar lite on the right side of your website.
Author: Željko Popivoda
Version: 0.1
License: GPLv2
Author URI: http://popivoda.com
*/

function render_debian_sidebar_lite() {
	$debianorg_url = plugins_url('images/debian-org.png', __FILE__ );
	$whydebian_url = plugins_url('images/why-debian.png', __FILE__ );
	$downloaddebian_url = plugins_url('images/download-debian.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 148 : 120;
	} else {
		$padding_top = 120;
	}
	echo "
		
	<div id='debianSidebarLite' style='position:fixed; top:".$padding_top."px; right:-3px; z-index:10000; cursor: pointer; border:none;'>
	
	<div class='debianNetwork'>
	<a target='_blank' title='Debian' href='http://www.debian.org/'>
	<img style='z-index: 10000;' src='{$debianorg_url}' /></a></div>
	
	<div class='debianNetwork'>
	<a target='_blank' title='Why use Debian' href='http://www.debian.org/intro/why_debian'>
	<img style='z-index: 10000;' src='{$whydebian_url}' /></a></div>
	
	<div class='debianNetwork'>
	<a target='_blank' title='Download Debian' href='http://www.debian.org/distrib/'>
	<img style='z-index: 10000;' src='{$downloaddebian_url}' /></a></div>
	
	</div>
	
	<style>
	.debianNetwork:hover {
	margin-left:-3px;
	}
	</style>
	
	";
}
add_action('wp_footer', 'render_debian_sidebar_lite');
