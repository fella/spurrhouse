<?php
/*
Plugin Name: Google Sheets WP Query Customizer
Description: Plugin to enable WP queries from Google Sheets.
Plugin URI:  http://www.spurrhouse.com
Author:      Dave Spurr
Version:     1.0
*/

/*
function decode_html_in_gdoc_table ($html) {
	return html_entity_decode($html);
}
add_filter('gdoc_table_html', 'decode_html_in_gdoc_table');
*/

/*
function filter_gdoc_query ($query, $atts) {
	if ('https://docs.google.com/spreadsheets/d/1F1JYnPcCYT9oQnNziFCOMLD-hW3FAKNPXtaSovkdLaw/edit#gid=0' !== $atts['key']) { return $query; }
	$cur_user = wp_get_current_user();
	return str_replace('__WORDPRESS_USER_EMAIL__', $cur_user->user_email, $query);
}
add_filter('gdoc_query', 'filter_gdoc_query', 10, 2);
*/
function filter_gdoc_query ($query, $atts) {
    if ('https://docs.google.com/spreadsheets/d/1F1JYnPcCYT9oQnNziFCOMLD-hW3FAKNPXtaSovkdLaw/edit#gid=0' !== $atts['key']) { 
		echo $query; 
	} else {
    $service_date = get_field('service');
    return str_replace('__WORDPRESS_META_DATE__', $service_date, $query);
	}
}
add_filter('gdoc_query', 'filter_gdoc_query', 10, 2);