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


$temp = new admin_settingpage('theme_mb2cg_settingstypography',  get_string('settingstypography', 'theme_mb2cg'));


$fontsGlobalOpt = array(
	'nfont1'=>get_string('nfont','theme_mb2cg') . ' #1',
	'nfont2'=>get_string('nfont','theme_mb2cg') . ' #2',
	'nfont3'=>get_string('nfont','theme_mb2cg') . ' #3',
	''=>'------------',
	'gfont1'=>get_string('gfont','theme_mb2cg') . ' #1',
	'gfont2'=>get_string('gfont','theme_mb2cg') . ' #2',
	'gfont3'=>get_string('gfont','theme_mb2cg') . ' #3',
);


$fontsOpt = array(
	'0'=>get_string('global','theme_mb2cg'),
	'nfont1'=>get_string('nfont','theme_mb2cg') . ' #1',
	'nfont2'=>get_string('nfont','theme_mb2cg') . ' #2',
	'nfont3'=>get_string('nfont','theme_mb2cg') . ' #3',
	''=>'------------',
	'gfont1'=>get_string('gfont','theme_mb2cg') . ' #1',
	'gfont2'=>get_string('gfont','theme_mb2cg') . ' #2',
	'gfont3'=>get_string('gfont','theme_mb2cg') . ' #3',
);


$fontsWeightOpt = array(
	'normal'=>get_string('normal','theme_mb2cg'),
	'bold'=>get_string('bold','theme_mb2cg'),
	'bolder'=>get_string('bolder','theme_mb2cg'),
	'lighter'=>get_string('lighter','theme_mb2cg'),
	'100'=>'100',
	'200'=>'200',
	'300'=>'300',
	'400'=>'400',
	'500'=>'500',
	'600'=>'600',
	'700'=>'700',
	'800'=>'800',
	'900'=>'900',
	'inherit'=>get_string('inherit','theme_mb2cg')
);


$ftextTransfromOpt = array(
	'none'=>get_string('none','theme_mb2cg'),
	'uppercase'=>get_string('uppercase','theme_mb2cg'),
	'capitalize'=>get_string('capitalize','theme_mb2cg'),
	'lowercase'=>get_string('lowercase','theme_mb2cg')
);


$fontStyleOpt = array(
	'normal'=>get_string('normal','theme_mb2cg'),
	'italic'=>get_string('italic','theme_mb2cg'),
	'oblique'=>get_string('oblique','theme_mb2cg')
);



$setting = new admin_setting_configmb2start('theme_mb2cg/startfgeneral', get_string('global','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/ffgeneral';
	$title = get_string('ffamily','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'gfont1', $fontsGlobalOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fsgeneral';
	$title = get_string('fsizepx','theme_mb2cg');
	$desc = get_string('fsizepxdesc','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, $desc, '15,17,19');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fwgeneral';
	$title = get_string('fweight','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name,$title,$desc,300,$fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endfgeneral');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);





$setting = new admin_setting_configmb2start('theme_mb2cg/startfheadings', get_string('headings','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/ffheadings';
	$title = get_string('ffamily','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, '0', $fontsOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	for ($i=1; $i<=6; $i++)
	{

		$name = 'theme_mb2cg/fsheading' . $i;
		$title = get_string('hsize','theme_mb2cg') . $i . ' (rem)';
		$setting = new admin_setting_configtext($name, $title, '', '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

	}


	$name = 'theme_mb2cg/fwheadings';
	$title = get_string('fweight','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'normal', $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/ttheadings';
	$title = get_string('ttransform','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'none', $ftextTransfromOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fstheadings';
	$title = get_string('fstyle','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'normal', $fontStyleOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endfheadings');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);






$setting = new admin_setting_configmb2start('theme_mb2cg/startfmenu', get_string('menu','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/ffmenu';
	$title = get_string('ffamily','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, '0', $fontsOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fsmenu';
	$title = get_string('fsize','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fwmenu';
	$title = get_string('fweight','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'inherit', $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/ttmenu';
	$title = get_string('ttransform','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'none', $ftextTransfromOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fstmenu';
	$title = get_string('fstyle','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'normal', $fontStyleOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endfmenu');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startfddmenu', get_string('ddmenu','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/ffddmenu';
	$title = get_string('ffamily','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc,'0', $fontsOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fsddmenu';
	$title = get_string('fsize','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc, 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fwddmenu';
	$title = get_string('fweight','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'inherit', $fontsWeightOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/ttddmenu';
	$title = get_string('ttransform','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'none', $ftextTransfromOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/fstddmenu';
	$title = get_string('fstyle','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'normal', $fontStyleOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endfddmenu');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);




for ($i = 1; $i<=3; $i++)
{
	$setting = new admin_setting_configmb2start('theme_mb2cg/startceltypo' . $i, get_string('celtypo','theme_mb2cg') . ' #' . $i);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		$name = 'theme_mb2cg/celsel' . $i;
		$title = get_string('celsel','theme_mb2cg');
		$setting = new admin_setting_configtextarea($name, $title, get_string('celseldesc','theme_mb2cg'),'');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/ffcel' . $i;
		$title = get_string('ffamily','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', '0', $fontsOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/fwcel' . $i;
		$title = get_string('fweight','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', 'inherit', $fontsWeightOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


	$setting = new admin_setting_configmb2end('theme_mb2cg/endceltypo' . $i);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
}






$ADMIN->add('theme_mb2cg', $temp);
