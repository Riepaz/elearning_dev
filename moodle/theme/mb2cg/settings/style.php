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


$temp = new admin_settingpage('theme_mb2cg_settingsstyle',  get_string('settingsstyle', 'theme_mb2cg'));



$bgPositionOpt = array(
	'center center'=>'center center',
	'left top'=>'left top',
	'left center'=>'left center',
	'left bottom'=>'left bottom',
	'right top'=>'right top',
	'right center'=>'right center',
	'right bottom'=>'right bottom',
	'center top'=>'center top',
	'center bottom'=>'center bottom'
);


$bgRepearOpt = array(
	'no-repeat'=>'no-repeat',
	'repeat'=>'repeat',
	'repeat-x'=>'repeat-x',
	'repeat-y'=>'repeat-y'
);


$bgSizeOpt = array(
	'cover'=>'cover',
	'auto'=>'auto',
	'contain'=>'contain'
);


$bgAttOpt = array(
	'scroll'=>'scroll',
	'fixed'=>'fixed',
	'local'=>'local'
);


$bgPredefinedOpt = array(
	''=>get_string('none','theme_mb2cg'),
	'strip1'=>get_string('strip1','theme_mb2cg'),
	'strip2'=>get_string('strip2','theme_mb2cg'),
	'strip3'=>get_string('strip3','theme_mb2cg')
);


$bgPredefinedPageOpt = array(
	'' => get_string('none','theme_mb2cg'),
	'default' => get_string('imgdefault','theme_mb2cg'),
	'strip1'=>get_string('strip1','theme_mb2cg'),
	'strip2'=>get_string('strip2','theme_mb2cg'),
	'strip3'=>get_string('strip3','theme_mb2cg')
);


$colorSchemeOpt = array(
	'light' => get_string('light','theme_mb2cg'),
	'dark' => get_string('dark','theme_mb2cg'),
);


$headerStyleOpt = array(
	'light' => get_string('light','theme_mb2cg'),
	'light2' => get_string('hstylelight2','theme_mb2cg'),
	//'light3' => get_string('hstylelight3','theme_mb2cg'),
	//'dark' => get_string('dark','theme_mb2cg')
);



$setting = new admin_setting_configmb2start('theme_mb2cg/startcolors', get_string('colors','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/accent1';
	$title = get_string('accentcolor','theme_mb2cg') . ' 1';
	$setting = new admin_setting_configmb2color($name, $title, $desc, '#a83332');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/accent2';
	$title = get_string('accentcolor','theme_mb2cg') . ' 2';
	$setting = new admin_setting_configmb2color($name, $title, '', '#d5a737');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/accent3';
	$title = get_string('accentcolor','theme_mb2cg') . ' 3';
	$setting = new admin_setting_configmb2color($name, $title, '', '#2b353b');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$setting = new admin_setting_configmb2spacer('theme_mb2cg/colorspacer1');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/textcolor';
	$title = get_string('textcolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, '', '#636363');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/linkcolor';
	$title = get_string('linkcolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, $desc, '#a83332');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/linkhcolor';
	$title = get_string('linkhcolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, $desc, '#242424');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/headingscolor';
	$title = get_string('headingscolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, $desc, '#242424');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$setting = new admin_setting_configmb2spacer('theme_mb2cg/colorspacer2');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/btncolor';
	$title = get_string('btncolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, $desc, '#435764');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/btnprimarycolor';
	$title = get_string('btnprimarycolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, $desc, '#e63946');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endcolors');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startpagestyle', get_string('pagestyle','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/pbgpre';
	$title = get_string('pbgpre','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', '', $bgPredefinedPageOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/pbgcolor';
	$title = get_string('bgcolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, get_string('pbgdesc','theme_mb2cg'), '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/pbgimage';
	$title = get_string('bgimage','theme_mb2cg');
	$setting = new admin_setting_configstoredfile($name, $title, get_string('pbgdesc','theme_mb2cg'), 'pbgimage');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/pbgrepeat';
	$title = get_string('bgrepeat','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', 'no-repeat', $bgRepearOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/pbgpos';
	$title = get_string('bgpos','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', 'center center', $bgPositionOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/pbgattach';
	$title = get_string('bgattachment','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', 'scroll', $bgAttOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/pbgsize';
	$title = get_string('bgsize','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', 'cover', $bgSizeOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endpagestyle');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startheaderstyle', get_string('headerstyleheading','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/headerstyle';
	$title = get_string('headerstyle','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', 'light2', $headerStyleOpt);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/headerctop';
	$title = get_string('headerctop','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '',7);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endheaderstyle');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2cg/startregionsstyle', get_string('regions','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$sectionsArr = array(
	'as'=>get_string('asstyle','theme_mb2cg'),
	'bc'=>get_string('bcstyle','theme_mb2cg'),
	'ac'=>get_string('acstyle','theme_mb2cg'),
	'bt'=>get_string('btstyle','theme_mb2cg'),
	'bf'=>get_string('bfstyle','theme_mb2cg'),
	'af'=>get_string('afstyle','theme_mb2cg')
);

foreach ($sectionsArr as $k=>$section)
{

	$setting = new admin_setting_configmb2start('theme_mb2cg/start' . $k . 'style', $section);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



		$setting = new admin_setting_configmb2start('theme_mb2cg/startheader' . $k . 'style', get_string('sectionheader','theme_mb2cg'));
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'sheader';
			$title = get_string('headercontent','theme_mb2cg');
			$setting = new admin_setting_confightmleditor($name,$title,'','');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'sheaderscheme';
			$title = get_string('colorscheme','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', 'light', $colorSchemeOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'sheaderbgcolor';
			$title = get_string('bgcolor','theme_mb2cg');
			$setting = new admin_setting_configmb2color($name,$title,'','');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


		$setting = new admin_setting_configmb2end('theme_mb2cg/endheader' . $k . 'style');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);



		$setting = new admin_setting_configmb2start('theme_mb2cg/startleyout' . $k . 'style', get_string('layout','theme_mb2cg'));
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

			$name = 'theme_mb2cg/' . $k . 'padding';
			$title = get_string('sectionpadding','theme_mb2cg');
			$setting = new admin_setting_configtext($name, $title, get_string('sectionpaddingdesc','theme_mb2cg'), '40,0');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bmb';
			$title = get_string('blockmarginb','theme_mb2cg');
			$setting = new admin_setting_configtext($name, $title, get_string('blockmarginbdesc','theme_mb2cg'), '10');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'fcolw';
			$title = get_string('fcolw','theme_mb2cg');
			$setting = new admin_setting_configtext($name, $title, get_string('sectionfcolwdesc','theme_mb2cg'), '6');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


		$setting = new admin_setting_configmb2end('theme_mb2cg/endleyout' . $k . 'style');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);



		$setting = new admin_setting_configmb2start('theme_mb2cg/startstyle' . $k . 'style', get_string('style','theme_mb2cg'));
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

			$name = 'theme_mb2cg/' . $k . 'scheme';
			$title = get_string('colorscheme','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', 'light', $colorSchemeOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgpre';
			$title = get_string('pbgpre','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', '', $bgPredefinedOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgcolor';
			$title = get_string('bgcolor','theme_mb2cg');
			$setting = new admin_setting_configmb2color($name, $title, get_string('pbgdesc','theme_mb2cg'), '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgimage';
			$title = get_string('bgimage','theme_mb2cg');
			$setting = new admin_setting_configstoredfile($name, $title, get_string('pbgdesc','theme_mb2cg'), $k . 'bgimage');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgrepeat';
			$title = get_string('bgrepeat','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', 'no-repeat', $bgRepearOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgpos';
			$title = get_string('bgpos','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', 'center center', $bgPositionOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgattach';
			$title = get_string('bgattachment','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', 'scroll', $bgAttOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/' . $k . 'bgsize';
			$title = get_string('bgsize','theme_mb2cg');
			$setting = new admin_setting_configselect($name, $title, '', 'cover', $bgSizeOpt);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


		$setting = new admin_setting_configmb2end('theme_mb2cg/endstyle' . $k . 'style');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);



	$setting = new admin_setting_configmb2end('theme_mb2cg/end' . $k . 'style');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


}


$setting = new admin_setting_configmb2end('theme_mb2cg/endregionsstyle');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startcustomcssstyle', get_string('scustomcssstyleheading','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/customcss';
	$title = get_string('customcss','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, '', '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endcustomcssstyle');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$ADMIN->add('theme_mb2cg', $temp);
