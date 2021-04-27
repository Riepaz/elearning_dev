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
 * Method to get menu data attributes
 *
 *
 */
function theme_mb2cg_menu_data ($page, $attribs = array())
{

	$output = '';


	$output .= ' data-animtype="' . theme_mb2cg_theme_setting($page, 'navatype', 2) . '"';
	$output .= ' data-animspeed="' . theme_mb2cg_theme_setting($page, 'navaspeed', 300) . '"';


	return $output;


}





/*
 *
 * Method to set body class
 *
 *
 */
function theme_mb2cg_settings_arr()
{

	global $CFG;

	$themename = theme_mb2cg_themename();

	$output = array(
		'all' => array('name'=>get_string('allsettings','theme_mb2cg'), 'icon'=>'fa fa-cogs', 'url'=> new moodle_url($CFG->wwwroot . '/admin/category.php?category=theme_' . $themename)),
		'general' => array('name'=>get_string('settingsgeneral','theme_mb2cg'), 'icon'=>'fa fa-dashboard', 'url'=>''),
		'features' => array('name'=>get_string('settingsfeatures','theme_mb2cg'), 'icon'=>'fa fa-dashboard', 'url'=>''),
		'fonts' => array('name'=>get_string('settingsfonts','theme_mb2cg'), 'icon'=>'fa fa-font', 'url'=>''),
		'nav' => array('name'=>get_string('settingsnav','theme_mb2cg'), 'icon'=>'fa fa-navicon', 'url'=>''),
		'social' => array('name'=>get_string('settingssocial','theme_mb2cg'), 'icon'=>'fa fa-share-alt', 'url'=>''),
		'style' => array('name'=>get_string('settingsstyle','theme_mb2cg'), 'icon'=>'fa fa-paint-brush', 'url'=>''),
		'typography' => array('name'=>get_string('settingstypography','theme_mb2cg'), 'icon'=>'fa fa-text-height', 'url'=>'')
	);

	return $output;

}





/*
 *
 * Method to theme links
 *
 *
 */
function theme_mb2cg_theme_links ()
{


	global $CFG, $USER, $COURSE, $PAGE;


	$output = '';
	$settings = theme_mb2cg_settings_arr();
	$theme_name = theme_mb2cg_themename();
	$purgelink = new moodle_url($CFG->wwwroot . '/admin/purgecaches.php', array('confirm'=>1, 'sesskey'=>$USER->sesskey, 'returnurl'=>$PAGE->url->out_as_local_url()));


	if (is_siteadmin())
	{
		$output .= '<div class="theme-links closed">';
		$output .= '<a href="#" class="toggle-open" data-width="350"><i class="icon1 fa fa-cog fa-spin"></i></a>';
		$output .= '<ul>';

		foreach ($settings as $id=>$v)
		{

			$url = $v['url'] ? $v['url'] : new moodle_url($CFG->wwwroot . '/admin/settings.php?section=theme_' . $theme_name . '_settings' . $id);

			$output .= '<li>';
			$output .= '<a href="' . $url . '" title="' . $v['name'] . '">';
			$output .= '<i class="' . $v['icon'] . '"></i> ';
			$output .= $v['name'];
			$output .= '</a>';
			$output .= '</li>';

		}

		$docUrl = get_string('urldoc','theme_mb2cg');
		$moreUrl = get_string('urlmore','theme_mb2cg');


		$output .= '<li class="custom-link"><a href="' . $purgelink . '" class="link-purgecaches" title="' .
		get_string('purgecaches','admin') . '"><i class="fa fa-cog"></i> ' . get_string('purgecaches','admin') . '</a></li>';
		$output .= '<li><a href="#">&nbsp;</a></li>';
		$output .= '<li class="custom-link"><a href="' . $docUrl . '"  target="_blank" class="link-doc" title="' .
		get_string('documentation','theme_mb2cg') . '"><i class="fa fa-info-circle"></i> ' . get_string('documentation','theme_mb2cg') . '</a></li>';
		$output .= '<li class="custom-link"><a href="' . $moreUrl . '" target="_blank" class="link-more" title="' .
		get_string('morethemes','theme_mb2cg') . '"><i class="fa fa-shopping-basket"></i> ' . get_string('morethemes','theme_mb2cg') . '</a></li>';

		$output .= '</ul>';
		$output .= '</div>';
	}



	return $output;

}







/*
 *
 * Method to get langauge list
 *
 *
 */
function theme_mb2cg_language_list ()
{


	global $PAGE, $OUTPUT, $CFG;

	$moodle33 = 2017051500;
	$output = '';
	$langs = get_string_manager()->get_list_of_translations();
	$strlang =  get_string('language');
	$currentlang = current_language();
	$langPos = theme_mb2cg_theme_setting($PAGE,'langmenu');


	$customFlagFile = $CFG->dirroot . '/theme/mb2cg/pix/flags/custom/' . strtoupper($currentlang) . '.png';
	$flagFile = $CFG->dirroot . '/theme/mb2cg/pix/flags/48x32/' . strtoupper($currentlang) . '.png';
	$noFlagFile = $CFG->dirroot . '/theme/mb2cg/pix/flags/48x32/noflag.png';
	$isCustomFlag = file_exists($customFlagFile) ? true : false;
	$isFlag = file_exists($flagFile) ? true : false;

	if($isCustomFlag)
	{
		$currentFlagUrl = $CFG->version >= 	$moodle33 ? $OUTPUT->image_url('flags/custom/' . strtoupper($currentlang),'theme') : $OUTPUT->pix_url('flags/custom/' . strtoupper($currentlang),'theme');
	}
	elseif ($isFlag)
	{
		$currentFlagUrl = $CFG->version >= 	$moodle33 ? $OUTPUT->image_url('flags/48x32/' . strtoupper($currentlang),'theme') : $OUTPUT->pix_url('flags/48x32/' . strtoupper($currentlang),'theme');
	}
	else
	{
		$currentFlagUrl = $CFG->version >= 	$moodle33 ? $OUTPUT->image_url('flags/48x32/noflag','theme') : $OUTPUT->pix_url('flags/48x32/noflag','theme');
	}

	$lanText = isset($langs[$currentlang]) ? $langs[$currentlang] : $strlang;
	$currentFlagImg = '<img class="lang-flag" src="' . $currentFlagUrl . '" alt="' . $lanText . '"> ';


	if (count($langs)>1)
	{

		$output .= $langPos == 2 ? '<ul class="languages-list">' : '';
		$output .= '<li class="lang-item dropdown">';
		$output .= '<a href="' . new moodle_url($PAGE->url, array('lang' => $currentlang)) . '" title="' . $lanText . '">';
		$output .= $currentFlagImg;
		$output .= '<span class="lang-shortname">' . ucfirst($currentlang) . '</span>';
		$output .= '<span class="lang-fullname">' . $lanText . '</span>';
		$output .= '<span class="mobile-arrow"></span>';
		$output .= '</a>';
        $output .= $langPos == 2 ? '</li>' : '';
		$output .= $langPos == 1 ? '<ul>' : '';



		foreach ($langs as $langtype => $langname)
		{

			if ($langtype !== $currentlang)
			{

				$flagFile1 = $CFG->dirroot . '/theme/mb2cg/pix/flags/custom/' . strtoupper($langtype) . '.png';
				$flagFile2 = $CFG->dirroot . '/theme/mb2cg/pix/flags/48x32/' . strtoupper($langtype) . '.png';
				$isFlag1 = file_exists($flagFile1) ? true : false;
				$isFlag2 = file_exists($flagFile2) ? true : false;

				if ($isFlag1)
				{
					$flagUrl = $CFG->version >= $moodle33 ? $OUTPUT->image_url('flags/custom/' . strtoupper($langtype),'theme') : $OUTPUT->pix_url('flags/custom/' . strtoupper($langtype),'theme');
				}
				elseif ($isFlag2)
				{
					$flagUrl = $CFG->version >= $moodle33 ? $OUTPUT->image_url('flags/48x32/' . strtoupper($langtype),'theme') : $OUTPUT->pix_url('flags/48x32/' . strtoupper($langtype),'theme');
				}
				else
				{
					$flagUrl = $CFG->version >= $moodle33 ? $OUTPUT->image_url('flags/48x32/noflag','theme') : $OUTPUT->pix_url('flags/48x32/noflag','theme');
				}


				$flafImg = '<img class="lang-flag" src="' . $flagUrl . '" alt="' . $langname . '"> ';


				$output .= '<li>';
				$output .= '<a href="' . new moodle_url($PAGE->url, array('lang' => $langtype)) . '" title="' . $langname . '">';
				$output .= $flafImg;
				$output .= '<span class="lang-shortname">' . ucfirst($langtype) . '</span>';
				$output .= '<span class="lang-fullname">' . $langname . '</span>';
				$output .= '</a>';
				$output .= '</li>';

			}

		}


		$output .= $langPos == 1 ? '</ul>' : '';
		$output .= $langPos == 1 ? '</li>' : '';
		$output .= $langPos == 2 ? '</ul>' : '';

	}


	return $output;

}





/*
 *
 * Method to get langauge list
 *
 *
 */
function theme_mb2cg_mycourses_list ()
{

	global $PAGE;
	$output = '';


	$myCourses = enrol_get_my_courses(NULL, 'visible DESC, fullname ASC');

	$output .= '<li class="mycourses dropdown">';

	$output .= '<a href="#" title="' . get_string('mycourses') . '">';
	$output .= get_string('mycourses');
	$output .= '<span class="mobile-arrow"></span>';
	$output .= '</a>';

	$output .= '<ul>';


	if ($myCourses)
	{
		foreach ($myCourses as $course)
		{

			$courseUrl = new moodle_url('/course/view.php?id=' . $course->id);

			$output .= '<li>';
			$output .= '<a href="' . $courseUrl . '" title="' . $course->fullname . '">';
			$output .= theme_mb2cg_wordlimit($course->fullname,theme_mb2cg_theme_setting($PAGE,'myclimit',6));
			$output .= '</a>';
			$output .= '</li>';

		}

	}
	else
	{

		$output .= '<li>';
		$output .= '<a href="' . new moodle_url('/my/index.php') . '">';
		$output .= get_string('myhome');
		$output .= '</a>';
		$output .= '</li>';

	}

	$output .= '</ul>';

	$output .= '</li>';


	return $output;


}












/*
 *
 * Method to get icon navigation
 *
 */
function theme_mb2cg_iconnav($page)
{

    $iconnavs = theme_mb2cg_theme_setting($page, 'navicons');

    if ($iconnavs !='')
    {
        return theme_mb2cg_static_content($iconnavs, true, array('listcls'=>'theme-iconnav'));
    }

}
