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


$temp = new admin_settingpage('theme_mb2cg_settingsfeatures',  get_string('settingsfeatures', 'theme_mb2cg'));


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
);


$yesNoOptions = array('1'=>get_string('yes','theme_mb2cg'), '0'=>get_string('no','theme_mb2cg'));
$langOptions = array(
	'0'=>get_string('none','theme_mb2cg'),
	'1'=>get_string('langinmenu','theme_mb2cg'),
	'2'=>get_string('langinheader','theme_mb2cg'),
);





$setting = new admin_setting_configmb2start('theme_mb2cg/startbookmarks', get_string('bookmarks','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

	$name = 'theme_mb2cg/bookmarks';
	$title = get_string('bookmarks','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

	$name = 'theme_mb2cg/bookmarkslimit';
	$title = get_string('bookmarkslimit','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '', 15);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

$setting = new admin_setting_configmb2end('theme_mb2cg/endbookmarks');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2cg/startcoursepanel', get_string('coursepanel','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/coursepanel';
	$title = get_string('coursepanel','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/roleshortname';
	$title = get_string('roleshortname','theme_mb2cg');
	$setting = new admin_setting_configtext($name,$title,'','editingteacher');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/teacheremail';
	$title = get_string('teacheremail','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name,$title,'',1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/teachermessage';
	$title = get_string('teachermessage','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name,$title,'',0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/cpaneldesclimit';
	$title = get_string('cpaneldesclimit','theme_mb2cg');
	$setting = new admin_setting_configtext($name,$title,'',24);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endcoursepanel');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2cg/startlang', get_string('languages','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/langmenu';
	$title = get_string('langmenu','theme_mb2cg');
	$setting = new admin_setting_configselect($name,$title,'',2,$langOptions);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endlang');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);




$setting = new admin_setting_configmb2start('theme_mb2cg/startloading', get_string('loadingscreen','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/loadingscr';
	$title = get_string('loadingscreen','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, get_string('loadingscrdesc', 'theme_mb2cg'), 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/loadinghide';
	$title = get_string('loadinghide','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '', 600);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/spinnerw';
	$title = get_string('spinnerw','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '', 50);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/lbgcolor';
	$title = get_string('bgcolor','theme_mb2cg');
	$setting = new admin_setting_configmb2color($name, $title, '', '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/loadinglogo';
	$title = get_string('logoimg','theme_mb2cg');
	$setting = new admin_setting_configstoredfile($name, $title, get_string('loadinglogodesc','theme_mb2cg'), 'loadinglogo');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/loadinglogow';
	$title = get_string('logow','theme_mb2cg');
	$desc = get_string('logowdesc', 'theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endloading');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2cg/startloginform', get_string('loginform','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$layoutArr = array(
		'1' => get_string('loginpage','theme_mb2cg'),
		'2' => get_string('forgotpage','theme_mb2cg')
	);



	$setting = new admin_setting_configmb2start('theme_mb2cg/startloginformgeneral', get_string('general','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		$name = 'theme_mb2cg/loginlinktopage';
		$title = get_string('loginlinktopage','theme_mb2cg');
		$setting = new admin_setting_configcheckbox($name, $title, '', 0);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginlink';
		$title = get_string('loginlink','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', 'fw', $layoutArr);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/logintext';
		$title = get_string('logintext','theme_mb2cg');
		$setting = new admin_setting_configtextarea($name, $title, '', '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


	$setting = new admin_setting_configmb2end('theme_mb2cg/endloginformgeneral');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);



	$setting = new admin_setting_configmb2start('theme_mb2cg/startloginadd', get_string('loginadditional','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

		for ($i = 1; $i<=3; $i++)
		{


			$name = 'theme_mb2cg/loginaddtext' . $i;
			$title = get_string('text','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, '', '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);

			$name = 'theme_mb2cg/loginaddurl' . $i;
			$title = get_string('url','theme_mb2cg') . ' #' . $i;
			$setting = new admin_setting_configtext($name, $title, get_string('opturl','theme_mb2cg'), '');
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);


			$name = 'theme_mb2cg/loginaddurlnw' . $i;
			$title = get_string('urlnw','theme_mb2cg');
			$setting = new admin_setting_configcheckbox($name, $title, '',0);
			$setting->set_updatedcallback('theme_reset_all_caches');
			$temp->add($setting);



			if ($i<3)
			{
				$name = 'theme_mb2cg/loginaddspacer' . $i;
				$setting = new admin_setting_configmb2spacer($name);
				$setting->set_updatedcallback('theme_reset_all_caches');
				$temp->add($setting);
			}

		}


	$setting = new admin_setting_configmb2end('theme_mb2cg/endloginadd');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endloginform');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startlogin', get_string('pagelogin','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$setting = new admin_setting_configmb2start('theme_mb2cg/startlogingeneral', get_string('general','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		$name = 'theme_mb2cg/cloginpage';
		$title = get_string('cloginpage','theme_mb2cg');
		$setting = new admin_setting_configcheckbox($name, $title, '', 0);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginlogo';
		$title = get_string('logoimg','theme_mb2cg');
		$desc = get_string('loginlogodesc','theme_mb2cg');
		$setting = new admin_setting_configstoredfile($name, $title, $desc, 'loginlogo');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginlogow';
		$title = get_string('logow','theme_mb2cg');
		$desc = get_string('logowdesc', 'theme_mb2cg');
		$setting = new admin_setting_configtext($name, $title, $desc, '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginlogomt';
		$title = get_string('logomt','theme_mb2cg');
		$setting = new admin_setting_configtext($name, $title, '', '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


	$setting = new admin_setting_configmb2end('theme_mb2cg/endlogingeneral');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$setting = new admin_setting_configmb2start('theme_mb2cg/startloginstyle', get_string('style','theme_mb2cg'));
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);

		$name = 'theme_mb2cg/loginbgcolor';
		$title = get_string('bgcolor','theme_mb2cg');
		$setting = new admin_setting_configmb2color($name, $title, get_string('pbgdesc','theme_mb2cg'), '');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginbgpre';
		$title = get_string('pbgpre','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', '', $bgPredefinedOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginbgimage';
		$title = get_string('bgimage','theme_mb2cg');
		$setting = new admin_setting_configstoredfile($name, $title, get_string('pbgdesc','theme_mb2cg'), 'loginbgimage');
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginbgrepeat';
		$title = get_string('bgrepeat','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', 'no-repeat', $bgRepearOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginbgpos';
		$title = get_string('bgpos','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', 'center center', $bgPositionOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginbgattach';
		$title = get_string('bgattachment','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', 'scroll', $bgAttOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);


		$name = 'theme_mb2cg/loginbgsize';
		$title = get_string('bgsize','theme_mb2cg');
		$setting = new admin_setting_configselect($name, $title, '', 'cover', $bgSizeOpt);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

	$setting = new admin_setting_configmb2end('theme_mb2cg/endloginstyle');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endlogin');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startpages', get_string('pagecls','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/pagecls';
	$title = get_string('pagecls','theme_mb2cg');
	$desc = get_string('pageclsdesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/coursecls';
	$title = get_string('coursecls','theme_mb2cg');
	$desc = get_string('courseclsdesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endpages');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startscrolltt', get_string('scrolltt','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/scrolltt';
	$title = get_string('scrolltt','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title,'', 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/scrollspeed';
	$title = get_string('scrollspeed','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title, '', 400);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endscrolltt');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startsearchform', get_string('searchform','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/searchboth';
	$title = get_string('searchboth','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title,'', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endsearchform');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startsitemenu', get_string('sitemenu','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/sitemenu';
	$title = get_string('sitemenu','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/sitemenuitems';
	$title = get_string('sitemenuitems','theme_mb2cg');
	$desc = get_string('sitemenuitemsdesc','theme_mb2cg');
	$setting = new admin_setting_configtextarea($name, $title, $desc,
	'dashboard,frontpage,calendar,badges,courses,addcourse,editcourse');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endsitemenu');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);



$setting = new admin_setting_configmb2start('theme_mb2cg/startganalitycs', get_string('ganatitle','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/ganaid';
	$title = get_string('ganaid','theme_mb2cg');
	$setting = new admin_setting_configtext($name, $title,$title = get_string('ganaiddesc','theme_mb2cg'), '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


	$name = 'theme_mb2cg/ganaasync';
	$title = get_string('ganaasync','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title,'', 0);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


$setting = new admin_setting_configmb2end('theme_mb2cg/endganalitycs');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$setting = new admin_setting_configmb2start('theme_mb2cg/startusability', get_string('usability','theme_mb2cg'));
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


	$name = 'theme_mb2cg/fontsizer';
	$title = get_string('fontsizer','theme_mb2cg');
	$setting = new admin_setting_configcheckbox($name, $title, '', 1);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);


		/*$name = 'theme_mb2cg/contrast';
		$title = get_string('contrast','theme_mb2cg');
		$setting = new admin_setting_configcheckbox($name, $title, '', 0);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);*/


$setting = new admin_setting_configmb2end('theme_mb2cg/endusability');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


$ADMIN->add('theme_mb2cg', $temp);
