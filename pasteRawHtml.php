<?php
/*
Plugin Name: Paste Raw HTML
Plugin URI: https://www.naenote.net/entry/paste-raw-html
Description: Add "Paste Raw HTML" button to your visual editor
Author: NAE
Version: 0.1
Author URI: https://www.naenote.net/entry/paste-raw-html
License: GPL2
*/

/*  Copyright 2017 NAE (email : @__NAE__)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
     published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function nae_paste_raw_html_button( $buttons ) {
	$buttons[] = 'nae_paste_raw_html_button';
	return $buttons;
}
add_filter( 'mce_buttons', 'nae_paste_raw_html_button' );

function nae_paste_raw_html_button_plugin( $plugin_array ) {
	$plugin_array['custom_button_script'] =   plugins_url( '/pasteRawHtmlButton.js', __FILE__ );
	return $plugin_array;
}
add_filter( 'mce_external_plugins', 'nae_paste_raw_html_button_plugin' );

?>