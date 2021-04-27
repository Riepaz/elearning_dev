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


$temp = new admin_settingpage('theme_mb2cg_settingsnav',  get_string('settingsnav', 'theme_mb2cg'));


$setting = new admin_setting_configmb2start('theme_mb2cg/startnavgeneral', get_string('mainmenu','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/stickynav';
	$title = get_string('stickynav','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '',0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	// Navigation animation type
	$name = 'theme_mb2cg/navatype';
	$title = get_string('navatype','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, '1', array('1'=>get_string('navatypefade', 'theme_mb2cg'), '2'=>get_string('navatypeslide', 'theme_mb2cg')));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	// Navigation animation speed
	$name = 'theme_mb2cg/navaspeed';
	$title = get_string('navaspeed','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtext($name,$title,$desc,150);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	// Navigation dropdown width
	$name = 'theme_mb2cg/navddwidth';
	$title = get_string('navddwidth','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtext($name,$title,$desc,220);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	//$name = 'theme_mb2cg/homeitem';
//	$title = get_string('homeitem','theme_mb2cg');
//	$setting = new admin_setting_configcheckbox($name, $title, '',0);
//	$setting->set_updatedcallback('theme_reset_all_caches');
//	$temp->add($setting);


	$name = 'theme_mb2cg/mycinmenu';
	$title = get_string('mycinmenu','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '',1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/myclimit';
	$title = get_string('myclimit','theme_mb2cg');
	$setting = new admin_setting_configtext($name,$title,'',6);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/navcls';
	$title = get_string('navcls','theme_mb2cg');
	$desc = get_string('navclsdesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name,$title,$desc,'');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



$setting = new admin_setting_configmb2end('theme_mb2cg/endnavgeneral');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2cg/startnavtopfooter', get_string('navtopfooter','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/topmenu';
	$title = get_string('topmenu','theme_mb2cg');
	$desc = get_string('menudesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/footermenu';
	$title = get_string('footermenu','theme_mb2cg');
	$desc = get_string('menudesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endnavtopfooter');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startnavicon', get_string('navicon','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/navicons';
	$title = get_string('links','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, get_string('naviconsdesc','theme_mb2cg'), '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endnavicon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$ADMIN->add('theme_mb2cg', $temp);
