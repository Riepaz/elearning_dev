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
 * @package		Mb2 Slider
 * @author		Mariusz Boloz (http://mb2extensions.com)
 * @copyright	Copyright (C) 2017 Mariusz Boloz (http://mb2extensions.com). All rights reserved
 * @license		Commercial (http://codecanyon.net/licenses)
**/

defined('MOODLE_INTERNAL') || die;



function block_mb2slider_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options=array())
{

    global $DB, $CFG, $USER;

    if ($context->contextlevel != CONTEXT_BLOCK && $context->contextlevel != CONTEXT_SYSTEM)
	{
	    return false;
    }

    if ($filearea !== 'content' && $filearea !== 'configimages')
	{
        return false;
    }

    // Extract the filename / filepath from the $args array.
    $filename = array_pop($args); // The last item in the $args array.
    if (!$args)
    {
        $filepath = '/'; // $args is empty => the path is '/'
    }
    else
    {
         $filepath = '/'.implode('/', $args).'/'; // $args contains elements of the filepath
    }

    $fs = get_file_storage();
    $file = $fs->get_file($context->id, 'block_mb2slider', $filearea, 0, $filepath, $filename);

    if (!$file)
	{
		return false;
    }

    send_stored_file($file, 86400, 0, $forcedownload, $options);

}
