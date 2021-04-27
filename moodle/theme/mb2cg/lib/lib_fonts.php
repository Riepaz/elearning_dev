<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2cg
 * @copyright 2018 - 2019 Mariusz Boloz (www.mb2themes.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */
 defined('MOODLE_INTERNAL') || die();


/*
 *
 * Method to typography custom styles
 *
 *
 */
function theme_mb2cg_custom_typography ($theme)
{

	global $PAGE;
	$output = '';


	// Custom stypography elements
	for ($i = 1; $i <= 3; $i++)
	{

		$el = theme_mb2cg_theme_setting($PAGE, 'celsel' . $i);
		$ff = theme_mb2cg_theme_setting($PAGE, 'ffcel' . $i);
		$fw = theme_mb2cg_theme_setting($PAGE, 'fwcel' . $i);


		if ($el !='')
		{
			$output .= $el;
			$output .= '{';
			$output .= $ff !== '0' ? 'font-family:' . theme_mb2cg_get_fonf_family($PAGE,$ff) . ';' : '';
			$output .= 'font-weight:' . $fw . ';';
			$output .= '}';
		}

	}


	return $output;


}







/*
 *
 * Method to get font family setting
 *
 *
 */
function theme_mb2cg_get_fonf_family ($page,$font)
{


	$output = '\'' . theme_mb2cg_theme_setting($page, $font) . '\'';


	return $output;


}





/*
 *
 * Method to get general font sizes
 *
 */
function theme_mb2cg_font_sizes ($size = 'fsbase')
{

	global $PAGE;

	$output = '';

	$fs = explode(',', theme_mb2cg_theme_setting($PAGE,'fsgeneral','15,17,19'));

	switch ($size)
	{
		case ('fsbase2'):
		$output = trim($fs[1]);
		break;

		case ('fsbase3'):
		$output = trim($fs[2]);
		break;

		default:
		$output = trim($fs[0]);
		break;
	}

	return $output;

}








/*
 *
 * Method to get Google webfonts
 *
 *
 */
function theme_mb2cg_google_fonts ($page, $attribs = array())
{

	$output = '';
	$font = '';
	$gfontsubset = theme_mb2cg_theme_setting($page,'gfontsubset');

	for ($i = 1; $i <=3; $i++)
	{

		$gfontname = theme_mb2cg_theme_setting($page, 'gfont' . $i);
		$gfontstyle = theme_mb2cg_theme_setting($page, 'gfontstyle' . $i);


		if ($gfontname !='')
		{


			$sep = $i>1 ? '|' : '';

			$font .= $sep . str_replace(' ', '+', $gfontname);

			if ($gfontstyle)
			{
				$font .= ':' . $gfontstyle;
			}


			if ($gfontsubset)
			{
				$font .= '&amp;subset=' . $gfontsubset;
			}


			$output = '<link href="//fonts.googleapis.com/css?family=' . $font . '" rel="stylesheet">';


		}

	}


	return $output;

}
