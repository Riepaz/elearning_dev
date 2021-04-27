<?php

defined('MOODLE_INTERNAL') || die();


mb2_add_shortcode('boxes', 'mb2_shortcode_boxes');
mb2_add_shortcode('boxesicon', 'mb2_shortcode_boxes');
mb2_add_shortcode('boxesimg', 'mb2_shortcode_boxes');
mb2_add_shortcode('boxescontent', 'mb2_shortcode_boxes');
mb2_add_shortcode('boxbg', 'mb2_shortcode_boxbg');


function mb2_shortcode_boxes ($atts, $content= null){
	extract(mb2_shortcode_atts( array(
		'columns' =>'1', // max 5
		'size' => '',
		'type' => 1,
		'margin' => '',
		'custom_class' => ''
	), $atts));


	$output = '';

	$GLOBALS['box_type'] = $type;

	$cls = $size === 'small' ? ' boxes-small' : '';
	$cls .= $custom_class ? ' ' . $custom_class : '';

	$style = $margin !='' ? ' style="padding:' . $margin . ';"' : '';

	$output .= '<div class="theme-boxes col-' . $columns . $cls . ' clearfix"' . $style . '>';

	$output .= mb2_do_shortcode($content);

	$output .= '</div>';


	return $output;

	// This is require for other boxes type
	// Icons or images
	unset($GLOBALS['box_type']);

}


mb2_add_shortcode('boximg', 'mb2_shortcode_boximg');


function mb2_shortcode_boximg ($atts, $content = null){
	extract(mb2_shortcode_atts( array(
		'image' =>'',
		'link' =>'',
		'type' => '',
		'link_target' =>'',
		'target' => '',
		'color' =>'',
	), $atts));


	$output = '';
	$title_color_span = '';
	$istarget = $link_target;

	if ($target)
	{
		$istarget = $target;
	}

	if ($type == '' && isset($GLOBALS['box_type']))
	{
		$type = $GLOBALS['box_type'];
	}

	$tstyle = '';
	$style = ($color && $type !=3) ? ' style="background-color:' . $color . ';"' : '';

	if (theme_mb2cg_check_for_tags($content, 'a'))
	{
		$link = 0;
	}

	$boxCls = ' type-' . $type;

	$output .= '<div class="theme-box">';
	$output .= $link !='' ? '<a href="' . $link . '" target="' . $istarget . '">' : '';
	$output .= '<div class="theme-boximg' . $boxCls . '">';
	$output .= '<div class="vtable-wrapp">';
	$output .= '<div class="vtable">';
	$output .= '<div class="vtable-cell">';
	$output .= $content ? '<h4><span class="theme-title-text"' . $style . '>' . $content . '</span></h4>' : '';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '<img src="' . $image . '" alt="">';
	$output .= $type == 3 ? '<div class="boxbg" style="background-color:' . $color . ';"></div>' : '';
	$output .= '</div>';
	$output .= $link !='' ? '</a>' : '';
	$output .= '</div>';

	return $output;

}







mb2_add_shortcode('boxicon', 'mb2_shortcode_boxicon');


function mb2_shortcode_boxicon ($atts, $content = null){
	extract(mb2_shortcode_atts( array(
		'icon' =>'fa-rocket',
		'type' => '',
		'title'=> '',
		'link' => '',
		'color' => 'primary',
		'link_target' =>'',
		'target' => ''
	), $atts));


	$output = '';
	$istarget = $link_target;

	if ($target)
	{
		$istarget = $target;
	}

	if ($type == '' && isset($GLOBALS['box_type']))
	{
		$type = $GLOBALS['box_type'];
	}

	// Check waht is the icon
	$pref = theme_mb2cg_font_icon_prefix($icon);

	$output .= '<div class="theme-box">';
	$output .= $link !='' ? '<a href="' . $link . '" target="' . $istarget . '">' : '';
	$output .= '<div class="theme-boxicon type-' . $type . ' color-' . $color . '">';
	$output .= '<div class="theme-boxicon-icon">';
	$output .= '<i class="' . $pref . $icon . '"></i>';
	$output .= '</div>';
	$output .= $link !='' ? '</a>' : '';
	$output .= '<div class="theme-boxicon-content">';

	if ($title)
	{
		$output .= '<h4 class="theme-boxicon-title">';
		$output .= $link !='' ? '<a href="' . $link . '" target="' . $link_target . '">' : '';
		$output .= $title;
		$output .= $link !='' ? '</a>' : '';
		$output .= '</h4>';
	}

	$output .= mb2_do_shortcode($content);
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;

}









mb2_add_shortcode('boxcontent', 'mb2_shortcode_boxcontent');

function mb2_shortcode_boxcontent ($atts, $content = null){
	extract(mb2_shortcode_atts( array(
		'icon' =>'',
		'type' => '',
		'title'=> '',
		'link' =>'',
		'linktext' =>'Read more',
		'color' => 'primary',
		'link_target' =>'',
		'target' => ''
	), $atts));


	$output = '';
	$istarget = $link_target;

	if ($target)
	{
		$istarget = $target;
	}

	if ($type == '' && isset($GLOBALS['box_type']))
	{
		$type = $GLOBALS['box_type'];
	}

	// Check waht is the icon
	$pref = theme_mb2cg_font_icon_prefix($icon);

	$boxCls = $icon !='' ? ' isicon' : ' noicon';
	$boxCls .= $link !='' ? ' islink' : '';

	$output .= '<div class="theme-box">';

	$output .= '<div class="theme-boxcontent type-' . $type . ' color-' . $color . $boxCls . '">';
	$output .= '<div class="theme-boxcontent-content">';
	$output .=  $icon !='' ?'<div class="theme-boxcontent-icon">' : '';
	$output .=  $icon !='' ? '<i class="' . $pref . $icon . '"></i>' : '';
	$output .=  $icon !='' ?'</div>' : '';
	$output .= $title !='' ? '<h4>' . $title . '</h4>' : '';
	$output .= mb2_do_shortcode($content);
	$output .= '</div>';
	$output .= $link !='' ? '<a class="theme-boxcontent-readmore" href="' . $link . '" target="' . $istarget . '">' . $linktext . '</a>' : '';
	$output .= '</div>';
	$output .= '</div>';


	return $output;

}



function mb2_shortcode_boxbg ($atts, $content = null){
	extract(mb2_shortcode_atts( array(
		'type' => '1',
	), $atts));


	$output = '';

	$output .= '<div class="theme-boxbg boxbg' . $type . '">';
	$output .= mb2_do_shortcode($content);
	$output .= '</div>';


	return $output;

}
