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
 * Method to get predefined less variables
 *
 */
function theme_mb2cg_get_pre_scss($theme)
{

	global $CFG;
	$scss = '';
    $vars = theme_mb2cg_get_style_vars();

    foreach ($vars as $k => $v)
	{

		switch ($k)
		{

			case ('ffgeneral') :

				$fname = $theme->settings->ffgeneral;
				$isv = (isset($theme->settings->$fname) && $theme->settings->$fname !='')  ? '\'' . $theme->settings->$fname . '\'' : NULL;
				break;

			case ('ffheadings') :

				$fname = $theme->settings->ffheadings;
				$isv = (isset($theme->settings->$fname) && $theme->settings->$fname !='')  ? '\'' . $theme->settings->$fname . '\'' : NULL;
				break;

			case ('ffmenu') :

				$fname = $theme->settings->ffmenu;
				$isv = (isset($theme->settings->$fname) && $theme->settings->$fname !='')  ? '\'' . $theme->settings->$fname . '\'' : NULL;
				break;

			case ('ffddmenu') :

				$fname = $theme->settings->ffddmenu;
				$isv = (isset($theme->settings->$fname) && $theme->settings->$fname !='')  ? '\'' . $theme->settings->$fname  . '\'' : NULL;
				break;


			case ('fsbase') :

				$isv = $v[0];
				break;

			case ('fsbase2') :

				$isv = $v[0];
				break;

			case ('fsbase3') :

				$isv = $v[0];
				break;

			default :

			$isv = (isset($theme->settings->$k) && $theme->settings->$k !='') ? $theme->settings->$k : NULL;

		}


		if (!empty($isv))
		{
			$issuffix = isset($v[1]) ? $v[1] : '';
			$scss .= '$' . $v[0] . ':' . $isv . $issuffix . ';';
		}
    }

	return $scss;

}







/*
 *
 * Method to set inline styles
 *
 */
function theme_mb2cg_get_pre_scss_raw ($theme)
{

	global $PAGE;
	$output = '';

	$output .= theme_mb2cg_custom_typography($theme);
    $output .= theme_mb2cg_admin_regions_hide_options();
	$output .= theme_mb2cg_theme_setting($PAGE,'customcss','',false,false,$theme);

	return $output;

}









/*
 *
 * Method to get theme settings for scss and less file
 *
 */
function theme_mb2cg_get_style_vars()
{


    $vars = array(


		// Theme setting => scss/less variable
		// General settings
	    'navddwidth' => array('navddwidth','px'),
		'pagewidth' => array('pagewidth','px'),


		// Colors
		'accent1' =>  array('accent1'),
		'accent2' =>  array('accent2'),
		'accent3' =>  array('accent3'),
		'textcolor' =>  array('textcolor'),
		'linkcolor' =>  array('linkcolor'),
		'linkhcolor' =>  array('linkhcolor'),
		'headingscolor' =>  array('headingscolor'),
		'btncolor' =>  array('btncolor'),
		'btnprimarycolor' =>  array('btnprimarycolor'),


		// Page background
		'pbgcolor' => array('pbgcolor'),
		'pbgrepeat' => array('pbgrepeat'),
		'pbgpos' => array('pbgpos'),
		'pbgattach' => array('pbgattach'),
		'pbgsize' => array('pbgsize'),
		'pbgcolor' => array('pbgcolor'),


		// Login page background
		'loginbgcolor' => array('loginbgcolor'),
		'loginbgrepeat' => array('loginbgrepeat'),
		'loginbgpos' => array('loginbgpos'),
		'loginbgattach' => array('loginbgattach'),
		'loginbgsize' => array('loginbgsize'),
		'loginbgcolor' => array('loginbgcolor'),


		// After slider style
		'assheaderbgcolor' => array('assheaderbgcolor'),
		'asbgcolor' => array('asbgcolor'),
		'asbgrepeat' => array('asbgrepeat'),
		'asbgpos' => array('asbgpos'),
		'asbgattach' => array('asbgattach'),
		'asbgsize' => array('asbgsize'),
		'asbgcolor' => array('asbgcolor'),
		'asbmb' => array('asbmb','px'),


		// Before content style
		'bcsheaderbgcolor' => array('bcsheaderbgcolor'),
		'bcbgcolor' => array('bcbgcolor'),
		'bcbgrepeat' => array('bcbgrepeat'),
		'bcbgpos' => array('bcbgpos'),
		'bcbgattach' => array('bcbgattach'),
		'bcbgsize' => array('bcbgsize'),
		'bcbgcolor' => array('bcbgcolor'),
		'bcbmb' => array('bcbmb','px'),


		// After content style
		'acsheaderbgcolor' => array('acsheaderbgcolor'),
		'acbgcolor' => array('acbgcolor'),
		'acbgrepeat' => array('acbgrepeat'),
		'acbgpos' => array('acbgpos'),
		'acbgattach' => array('acbgattach'),
		'acbgsize' => array('acbgsize'),
		'acbgcolor' => array('acbgcolor'),
		'acbmb' => array('acbmb','px'),


		// Bottom style
		'btsheaderbgcolor' => array('btsheaderbgcolor'),
		'btbgcolor' => array('btbgcolor'),
		'btbgrepeat' => array('btbgrepeat'),
		'btbgpos' => array('btbgpos'),
		'btbgattach' => array('btbgattach'),
		'btbgsize' => array('btbgsize'),
		'btbgcolor' => array('btbgcolor'),
		'btbmb' => array('btbmb','px'),


		// Before footer style
		'bfsheaderbgcolor' => array('bfsheaderbgcolor'),
		'bfbgcolor' => array('bfbgcolor'),
		'bfbgrepeat' => array('bfbgrepeat'),
		'bfbgpos' => array('bfbgpos'),
		'bfbgattach' => array('bfbgattach'),
		'bfbgsize' => array('bfbgsize'),
		'bfbgcolor' => array('bfbgcolor'),
		'bfbmb' => array('bfbmb','px'),


		// After footer style
		'afsheaderbgcolor' => array('afsheaderbgcolor'),
		'afbgcolor' => array('afbgcolor'),
		'afbgrepeat' => array('afbgrepeat'),
		'afbgpos' => array('afbgpos'),
		'afbgattach' => array('afbgattach'),
		'afbgsize' => array('afbgsize'),
		'afbgcolor' => array('afbgcolor'),
		'afbmb' => array('afbmb','px'),


		// Fonts family
		'ffgeneral' =>  array('ffgeneral'),
		'ffheadings' =>  array('ffheadings'),
		'ffmenu' =>  array('ffmenu'),
		'ffddmenu' =>  array('ffddmenu') ,


		// Font size
		'fsbase'=> array(theme_mb2cg_font_sizes('fsbase'),'px'),
		'fsbase2'=> array(theme_mb2cg_font_sizes('fsbase2'),'px'),
		'fsbase3'=> array(theme_mb2cg_font_sizes('fsbase3'),'px'),


		// Font size in em
		'fsheading1'=> array('fsheading1','em'),
		'fsheading2'=> array('fsheading2','em'),
		'fsheading3'=> array('fsheading3','em'),
		'fsheading4'=> array('fsheading4','em'),
		'fsheading5'=> array('fsheading5','em'),
		'fsheading6'=> array('fsheading6','em'),
		'fsmenu'=> array('fsmenu','em'),
		'fsddmenu'=> array('fsddmenu','em'),


		// Font weight
		'fwgeneral'=> array('fwgeneral'),
		'fwheadings'=> array('fwheadings'),
		'fwmenu'=> array('fwmenu'),
		'fwddmenu'=> array('fwddmenu'),


		// Text transform
		'ttheadings'=> array('ttheadings'),
		'ttmenu'=> array('ttmenu'),
		'ttddmenu'=> array('ttddmenu'),


		// Font style
		'fstheadings'=> array('fstheadings'),
		'fstmenu'=> array('fstmenu'),
		'fstddmenu'=> array('fstddmenu'),

   	);


	return $vars;

}
