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


$temp = new admin_settingpage('theme_mb2cg_settingsfonts',  get_string('settingsfonts', 'theme_mb2cg'));


$fontsArray = array(
	'Arial'=> 'Arial',
	'Georgia'=>'Georgia',
	'Tahoma'=>'Tahoma',
	'Lucida Sans Unicode'=>'Lucida Sans Unicode',
	'Palatino Linotype'=>'Palatino Linotype',
	'Trebuchet MS'=>'Trebuchet MS'
);



$setting = new admin_setting_configmb2start('theme_mb2cg/startnfonts', get_string('nfonts','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
	
	
for ($i = 1; $i <=3; $i++)
{	
		
	$name = 'theme_mb2cg/nfont' . $i;
	$title = get_string('fontname','theme_mb2cg') . ' #' . $i;
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, '', $fontsArray);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);	
	
}


$setting = new admin_setting_configmb2end('theme_mb2cg/endnfonts');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);





$setting = new admin_setting_configmb2start('theme_mb2cg/startgfonts', get_string('gfonts','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
	
	
for ($i = 1; $i <=3; $i++)
{
	
		
	$name = 'theme_mb2cg/gfont' . $i;
	$title = get_string('fontname','theme_mb2cg') . ' #' . $i;
	$def = $i == 1 ? 'Roboto Slab' : '';
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, $def);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	
	
	$name = 'theme_mb2cg/gfontstyle' . $i;
	$title = get_string('fontstyle','theme_mb2cg') . ' #' . $i;
	$def2 = $i == 1 ? '300,400,700' : '';
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, $def2);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	
		
	$name = 'theme_mb2cg/gfontspacer' . $i;
	$setting = new admin_setting_configmb2spacer($name);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
		
}


	$name = 'theme_mb2cg/gfontsubset';
	$title = get_string('fontsubset','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



$setting = new admin_setting_configmb2end('theme_mb2cg/endgfonts');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);




$ADMIN->add('theme_mb2cg', $temp);