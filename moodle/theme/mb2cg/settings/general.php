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


$temp = new admin_settingpage('theme_mb2cg_settingsgeneral',  get_string('settingsgeneral', 'theme_mb2cg'));


$setting = new admin_setting_configmb2start('theme_mb2cg/startlogo', get_string('logo','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/logo';
	$title = get_string('logoimg','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configstoredfile($name, $title, $desc, 'logo');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/logow';
	$title = get_string('logow','theme_mb2cg');
	$desc = get_string('logowdesc', 'theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, $desc, 180);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/logomt';
	$title = get_string('logomt','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '', 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/logotitle';
	$title = get_string('logotitle','theme_mb2cg');
	$desc = get_string('logotitledesc', 'theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, $desc, 'Cognitio');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/logoalttext';
	$title = get_string('logoalttext','theme_mb2cg');
	$desc = get_string('logoalttextdesc', 'theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, $desc, 'Cognitio');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/favicon';
	$title = get_string('favicon','theme_mb2cg');
	$desc = get_string('favicondesc', 'theme_mb2cg');
	$setting = new admin_setting_configstoredfile($name, $title, $desc, 'favicon', 0, array('accepted_types'=>array('.ico')));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);




$setting = new admin_setting_configmb2start('theme_mb2cg/startinfo', get_string('info','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



	$setting = new admin_setting_configmb2start('theme_mb2cg/startinfoemail', get_string('email','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		$name = 'theme_mb2cg/emaillink';
		$title = get_string('emaillink','theme_mb2cg');
		$setting = new admin_setting_configcheckbox($name, $title, '', 0);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/infoemailspacer';
		$setting = new admin_setting_configmb2spacer($name);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		for ($i = 1; $i<=3; $i++)
		{

			$name = 'theme_mb2cg/email' . $i;
			$title = get_string('email','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/emailname' . $i;
			$title = get_string('emailname','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			if ($i<3)
			{
				$name = 'theme_mb2cg/infoemailspacer' . $i;
				$setting = new admin_setting_configmb2spacer($name);
				$setting->set_updatedcallback('theme_reset_all_caches');
				$temp->add($setting);
			}

		}


	$setting = new admin_setting_configmb2end('theme_mb2cg/endinfoemail');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



	$setting = new admin_setting_configmb2start('theme_mb2cg/startinfophone', get_string('phone','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		for ($i = 1; $i<=3; $i++)
		{

			$name = 'theme_mb2cg/phone' . $i;
			$title = get_string('phone','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/phonename' . $i;
			$title = get_string('phonename','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			if ($i<3)
			{
				$name = 'theme_mb2cg/infophonespacer' . $i;
				$setting = new admin_setting_configmb2spacer($name);
				$setting->set_updatedcallback('theme_reset_all_caches');
				$temp->add($setting);
			}

		}


	$setting = new admin_setting_configmb2end('theme_mb2cg/endinfophone');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



	$setting = new admin_setting_configmb2start('theme_mb2cg/startinfolocation', get_string('location','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		for ($i = 1; $i<=3; $i++)
		{

			$name = 'theme_mb2cg/location' . $i;
			$title = get_string('location','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/locationname' . $i;
			$title = get_string('locationname','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			if ($i<3)
			{
				$name = 'theme_mb2cg/infolocationspacer' . $i;
				$setting = new admin_setting_configmb2spacer($name);
				$setting->set_updatedcallback('theme_reset_all_caches');
				$temp->add($setting);
			}

		}


	$setting = new admin_setting_configmb2end('theme_mb2cg/endinfolocation');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



	$setting = new admin_setting_configmb2start('theme_mb2cg/startinfocustom', get_string('infocustom','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		$name = 'theme_mb2cg/custominfoicon';
		$title = get_string('custominfoicon','theme_mb2cg');
		$setting = new admin_setting_configtext($name, $title, get_string('icondesc', 'theme_mb2cg'), 'fa-mortar-board');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/custominfospacer';
		$setting = new admin_setting_configmb2spacer($name);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		for ($i = 1; $i<=3; $i++)
		{

			$name = 'theme_mb2cg/custominfo' . $i;
			$title = get_string('custominfo','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/custominfoname' . $i;
			$title = get_string('custominfoname','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			if ($i<3)
			{
				$name = 'theme_mb2cg/infocustomspacer' . $i;
				$setting = new admin_setting_configmb2spacer($name);
				$setting->set_updatedcallback('theme_reset_all_caches');
				$temp->add($setting);
			}

		}



	$setting = new admin_setting_configmb2end('theme_mb2cg/endinfocustom');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



$setting = new admin_setting_configmb2end('theme_mb2cg/endinfo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startlayout', get_string('layout','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/pagewidth';
	$title = get_string('pagewidth','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtext($name, $title, $desc,1240);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$layoutArr = array(
		'fw' => get_string('layoutfw','theme_mb2cg'),
		'fx' => get_string('layoutfx','theme_mb2cg'),
		//'fxw' => get_string('layoutfxc','theme_mb2cg')
	);
	$name = 'theme_mb2cg/layout';
	$title = get_string('layout','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'fw', $layoutArr);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$sidebarPosArr = array(
		'classic' => get_string('classic','theme_mb2cg'),
		'left' => get_string('left','theme_mb2cg'),
		'right' => get_string('right','theme_mb2cg')
	);
	$name = 'theme_mb2cg/sidebarpos';
	$title = get_string('sidebarpos','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configselect($name, $title, $desc, 'right', $sidebarPosArr);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$sidebarBtArr = array(
		'0' => get_string('none','theme_mb2cg'),
		'1' => get_string('sidebaryesshow','theme_mb2cg'),
		'2' => get_string('sidebaryeshide','theme_mb2cg')
	);

	$name = 'theme_mb2cg/sidebarbtn';
	$title = get_string('sidebarbtn','theme_mb2cg');
	$setting = new admin_setting_configselect($name, $title, '', '1', $sidebarBtArr);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endlayout');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startcourse', get_string('coursesettings','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

	$name = 'theme_mb2cg/coursegridfp';
	$title = get_string('coursegridfp','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/coursegridcat';
	$title = get_string('coursegridcat','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/courseswitchlayout';
	$title = get_string('courseswitchlayout','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/coursespacer4';
	$setting = new admin_setting_configmb2spacer($name);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/courseplimg';
	$title = get_string('courseplimg','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/coursebtn';
	$title = get_string('coursebtn','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/coursespacer1';
	$setting = new admin_setting_configmb2spacer($name);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/coursestudentscount';
	$title = get_string('coursestudentscount','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/studentsroleid';
	$title = get_string('studentsroleid','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '', 5);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/coursespacer2';
	$setting = new admin_setting_configmb2spacer($name);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/cbanner';
	$title = get_string('cbanner','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/coursespacer5';
	$setting = new admin_setting_configmb2spacer($name);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/coursescls';
	$title = get_string('coursescls','theme_mb2cg');
	$desc = get_string('coursesclsdesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endcourse');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startregions', get_string('regions','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$regionOptions = array(
		'none'=>get_string('none','theme_mb2cg'),
		'slider'=>get_string('region-slider','theme_mb2cg'),
		'after-slider'=>get_string('region-after-slider','theme_mb2cg'),
		'before-content'=>get_string('region-before-content','theme_mb2cg'),
		'after-content'=>get_string('region-after-content','theme_mb2cg'),
		'bottom'=>get_string('region-bottom','theme_mb2cg')
	);
	$name = 'theme_mb2cg/regionnogrid';
	$title = get_string('regionnogrid','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configmultiselect($name, $title, $desc, array(), $regionOptions);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/blockstyle';
	$title = get_string('blockstyle','theme_mb2cg');
	$desc = get_string('blockstyledesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endregions');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startfooter', get_string('footer','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

	$name = 'theme_mb2cg/foottext';
	$title = get_string('foottext','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configtextarea($name, $title, $desc, 'Copyright &copy; Cognitio 2018. All rights reserved.');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/footlogin';
	$title = get_string('footlogin','theme_mb2cg');
	$desc = '';
	$setting = new admin_setting_configcheckbox($name, $title, $desc, 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endfooter');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$ADMIN->add('theme_mb2cg', $temp);
