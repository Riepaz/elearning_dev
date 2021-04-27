<?php

defined('MOODLE_INTERNAL') || die();


mb2_add_shortcode('hide', 'mb2_shortcode_hide');


function mb2_shortcode_hide ($atts, $content= null){
	
	extract(mb2_shortcode_atts( array(), $atts));	
			
	return '<div class="hidden">' . $content . '</div>';
	
}