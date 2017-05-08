<?php
/*

Plugin Name: Farsi Feed
Description: Customize wordpress feed for using on Farsi/Arabi/Hebrew sites. 
Version: 1.1
Author: Ali Haji
Author URI: http://www.alihaji.info
License: GPL2

*/


function ifl_rtl_font_for_feeds( $content ) {

	global $post, $id;
	$blog_key = substr( md5( get_bloginfo('url') ), 0, 16 );
	if ( ! is_feed() ) return $content;
	
	// Displaying the content ***
	$content = str_replace('<p>','<p style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right">' ,$content); 
	$content = str_replace('<span>','<span style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right">' ,$content); 
	$content = str_replace('<ul>','<ul style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right">' ,$content); 
	$content = str_replace('<ol>','<ol style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right">' ,$content); 
	$content = str_replace('<div>','<div style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right">' ,$content); 
	$content = str_replace('<p dir="rtl">','<p style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right" dir="rtl">' ,$content); 
	
	return '<p style="font-family: Tahoma,Verdana,sans-serif; direction: rtl;" align="right">'.$content.'</p>';
		
} // End function
add_filter('the_content', 'ifl_rtl_font_for_feeds');


?>
