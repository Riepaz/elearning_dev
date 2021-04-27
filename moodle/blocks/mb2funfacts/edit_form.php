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
 * @package		Mb2 Fun Facts
 * @author		Mariusz Boloz (http://mb2extensions.com)
 * @copyright	Copyright (C) 2018 Mariusz Boloz (http://mb2extensions.com). All rights reserved
 * @license		Commercial (http://codecanyon.net/licenses)
**/

defined('MOODLE_INTERNAL') || die;
 

 
class block_mb2funfacts_edit_form extends block_edit_form 
{
 
 
 
 
	protected function specific_definition($mform) 
	{
 
       
	   	global $CFG, $PAGE;
		
		
		$PAGE->requires->jquery();
		$PAGE->requires->css('/blocks/mb2funfacts/assets/spectrum/spectrum.css');
	   	$PAGE->requires->js('/blocks/mb2funfacts/assets/spectrum/spectrum.js');
	   	$PAGE->requires->js('/blocks/mb2funfacts/scripts/admin.js'); 
		
		
		// Arrays for select form fields		
		$yesNoArr = array(
			'1' => get_string('yes','block_mb2funfacts'),
			'0' => get_string('no','block_mb2funfacts')
		);
		
		
		// Form elements
		$sepAttr = ' class="mb2form-separator" style="height:1px;border-top:solid 1px #e5e5e5;margin:30px 0;"';
		
		
		
		// General options
		$mform->addElement('header', 'config_generaloptions', get_string('generaloptions', 'block_mb2funfacts'));
		
		
		$mform->addElement('textarea', 'config_facts', get_string('facts','block_mb2funfacts'));
		$mform->addHelpButton('config_facts', 'facts', 'block_mb2funfacts');
		$mform->setType('config_facts', PARAM_TEXT);	
		
				
		$mform->addElement('text', 'config_cols', get_string('cols','block_mb2funfacts'));
		$mform->setDefault('config_cols', 4);
        $mform->setType('config_cols', PARAM_INT);
		
		
		$mform->addElement('text', 'config_gutter', get_string('gutter','block_mb2funfacts'));
		$mform->setDefault('config_gutter', 0);
        $mform->setType('config_gutter', PARAM_INT);
		
		
		$mform->addElement('text', 'config_aspeed', get_string('aspeed','block_mb2funfacts'));
		$mform->setDefault('config_aspeed', 10000);
        $mform->setType('config_aspeed', PARAM_INT);
				
		
		$mform->addElement('html', '<div' . $sepAttr . '></div>');
		
		
		$mform->addElement('text', 'config_fs', get_string('fs','block_mb2funfacts'));
		$mform->addHelpButton('config_fs', 'fs', 'block_mb2funfacts');
		$mform->setDefault('config_fs', '2.8|1.35|3.6|0.8');
        $mform->setType('config_fs', PARAM_TEXT);
		
		
		$mform->addElement('text', 'config_bgcolor', get_string('bgcolor','block_mb2funfacts'),array('class'=>'mb2funfacts_color'));
        $mform->setType('config_bgcolor', PARAM_TEXT);
		
		
		$mform->addElement('text', 'config_numcolor', get_string('numcolor','block_mb2funfacts'),array('class'=>'mb2funfacts_color'));
		$mform->setDefault('config_numcolor', '#2b353b');
        $mform->setType('config_numcolor', PARAM_TEXT);
		
		
		$mform->addElement('text', 'config_titlecolor', get_string('titlecolor','block_mb2funfacts'),array('class'=>'mb2funfacts_color')); 	     	
	    $mform->setType('config_titlecolor', PARAM_TEXT);
		
		
		$mform->addElement('text', 'config_iconcolor', get_string('iconcolor','block_mb2funfacts'),array('class'=>'mb2funfacts_color'));
		$mform->setDefault('config_iconcolor', '#a83332');
        $mform->setType('config_iconcolor', PARAM_TEXT);
		
		
		$mform->addElement('text', 'config_desccolor', get_string('desccolor','block_mb2funfacts'),array('class'=>'mb2funfacts_color'));
        $mform->setType('config_desccolor', PARAM_TEXT);
				
		
		$mform->addElement('html', '<div' . $sepAttr . '></div>');
				
		
		$mform->addElement('textarea', 'config_beforetext', get_string('beforetext','block_mb2funfacts'));
		$mform->setType('config_beforetext', PARAM_TEXT);
		
		
		$mform->addElement('textarea', 'config_aftertext', get_string('aftertext','block_mb2funfacts'));
		$mform->setType('config_aftertext', PARAM_TEXT);
		
	   
	   			
		
		
	}
	
	
	
	function set_data($defaults) {

        
		$slidesCount = 7;
		
		if (empty($entry->id)) 
		{
           
		    $entry = new stdClass;
            $entry->id = null;
			
        }

        $draftitemid = file_get_submitted_draft_itemid('config_images');

       	file_prepare_draft_area($draftitemid, $this->block->context->id, 'block_mb2funfacts', 'content', 0, array('subdirs'=>true));

      	$entry->attachments = $draftitemid;	
		
		
			
		

        parent::set_data($defaults);		
		
		
        if ($data = parent::get_data()) 		
		{
           
		   
			//file_save_draft_area_files($data->config_images, $this->block->context->id, 'block_mb2funfacts', 'content', 0, array('subdirs' => true));
			
			
        }
		
		
    }
	
	
}