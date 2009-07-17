<?php
/*
Plugin Name: WP Compress JS
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Compress javascript files
Version: 0.1
Author: Marcos Machado (marcos.renan@gmail.com)
Author URI: http://URI_Of_The_Plugin_Author
*/

/*  Copyright 2009  Marcos Machado  (email : marcos.renan@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//some defines:
define(WP_COMPRESS_JS_PATH, '/var/www/blog/wp-content/plugins/wp_compress_js/');
define(WP_COMPRESS_JS_PATH_MAIN_FILE, WP_COMPRESS_JS_PATH . 'wp_compress_js.php');

//install function:
function wp_compress_js_install() {
}

//uninstall function:
function wp_compress_js_uninstall() {
}

//generate compressed javascript from script tags in the buffer:
function get_compressed_header() {
    
}

register_activation_hook(WP_COMPRESS_JS_PATH_MAIN_FILE, 'wp_compress_js_install');
register_deactivation_hook(WP_COMPRESS_JS_PATH_MAIN_FILE, 'wp_compress_js_uninstall');
?>
