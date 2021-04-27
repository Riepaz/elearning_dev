<?php

defined('MOODLE_INTERNAL') || die();

mb2_add_shortcode('lang', 'mb2_shortcode_lang');


function mb2_shortcode_lang ($atts, $content= null){
	global $PAGE, $OUTPUT, $CFG;
	extract(mb2_shortcode_atts( array(
		'tag' => 'en'		
	), $atts));
	
	
	$tagArr = explode(',',str_replace(' ','',$tag));
		
	$output = '';
	$output .= in_array(current_language(),$tagArr) ? mb2_do_shortcode($content) : '';	
		
	return $output;	
	
}