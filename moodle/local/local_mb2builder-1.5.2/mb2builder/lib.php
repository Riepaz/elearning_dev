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
 * @package    local_mb2builder
 * @copyright  2018 - 2019 Mariusz Boloz (www.mb2themes.com)
 * @license    Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();

global $CFG, $PAGE;


define('LOCAL_MB2BUILDER_PATH_FIELDS', $CFG->dirroot . '/local/mb2builder/builder/fields');
define('LOCAL_MB2BUILDER_PATH_ELEMENTS', $CFG->dirroot . '/local/mb2builder/builder/elements');
define('LOCAL_MB2BUILDER_PATH_THEME_ELEMENTS', $CFG->dirroot . '/theme/' . $CFG->theme . '/builder/elements');
define('LOCAL_MB2BUILDER_PATH_THEME_ASSETS', $CFG->dirroot . '/theme/' . $CFG->theme . '/assets');


require_once(__DIR__ . '/lib/lib_file.php');
require_once(__DIR__ . '/lib/lib_block.php');
require_once(__DIR__ . '/lib/lib_builder_elements.php');


// Require field types
$types_dir_contents = scandir(LOCAL_MB2BUILDER_PATH_FIELDS);

foreach ($types_dir_contents as $type)
{
	$file_type = pathinfo($type, PATHINFO_EXTENSION);

	if ($file_type === 'php')
	{
		require_once (LOCAL_MB2BUILDER_PATH_FIELDS . '/' . basename($type));
	}
}

// Get settings - section, row and column
require_once(__DIR__ . '/builder/settings/settings_section.php');
require_once(__DIR__ . '/builder/settings/settings_row.php');
require_once(__DIR__ . '/builder/settings/settings_col.php');


// Get settings elements settings
foreach (local_mb2builder_get_elements() as $el)
{
	if (file_exists(LOCAL_MB2BUILDER_PATH_THEME_ELEMENTS . '/' . $el . '/settings.php'))
	{
		require_once (LOCAL_MB2BUILDER_PATH_THEME_ELEMENTS . '/' . $el . '/settings.php');
	}
	else
	{
		require_once (LOCAL_MB2BUILDER_PATH_ELEMENTS . '/' . $el . '/settings.php');
	}
}


// Get settings custom fields
require_once(__DIR__ . '/classes/fields/mb2builder.php');
require_once(__DIR__ . '/classes/fields/mb2buildersettings.php');

if (preg_match('@local_mb2builder@', $PAGE->pagetype))
{
	$PAGE->requires->jquery();
	$PAGE->requires->jquery_plugin('ui');

	// Load styles and scripts
	$PAGE->requires->css('/local/mb2builder/builder/css/style.css');	
	$PAGE->requires->js('/local/mb2builder/builder/js/helper.js');
	$PAGE->requires->js('/local/mb2builder/builder/js/script.js');
}
