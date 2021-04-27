<?php

defined('MOODLE_INTERNAL') || die();


mb2_add_shortcode('h', 'mb2_shortcode_h');

function mb2_shortcode_h ($atts, $content= null){

	extract(mb2_shortcode_atts( array(
		'size'=> '4',
		'margin' => '',
		'align' => '',
		'custom_class' => ''
	), $atts));


	$style = '';

	$cls = $custom_class ? ' class="' . $custom_class . '"' : '';

	if ($margin || $align)
	{
		$style .= ' style="';
		$style .= $margin ? 'margin:' . $margin . ';' : '';
		$style .= $align ? 'text-align:' . $align . ';' : '';
		$style .= '"';
	}

	return '<h' . $size . $style . $cls. '>' . mb2_do_shortcode($content) . '</h' . $size . '>';

}
