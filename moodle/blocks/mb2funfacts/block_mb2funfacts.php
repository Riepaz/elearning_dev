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



class block_mb2funfacts extends block_base 
{
    
	
	private $headerhidden = true;
	protected $editorcontext = null;
	
	
	
	 
	public function init() 
	{
        $this->title = get_string('mb2funfacts', 'block_mb2funfacts');
    }
	
	
	
	public function instance_allow_multiple() {
        return true;
    }
	
	
	
	function applicable_formats() {
        return array('all' => true);
    }
	
	
	
	function has_config() 
	{
						
		return true;
	
	}
	
	
	
	function specialization() 
	{
        
		$allUrl = isset($this->config->alllink) ? $this->config->alllink : '';
		$title = isset($this->config->title) ? $this->config->title : '';
		
		$this->title = '';
		
		if ($allUrl == '')
		{
			$this->title = $title ? format_string($title) : '';//format_string(get_string('mb2funfacts', 'block_mb2funfacts'));
		}
		
		
    }
	
	
	
	
	
	function config_print() 
	{		
		if (!$this->has_config()) {
			return false;
	  	}	  
	}
	
	
	
	
	public function get_content() 
	{
				
		
		global $CFG, $PAGE, $USER, $DB, $OUTPUT;
		
		 
		$output = '';
		$showBlock = true;
		$items = array();
		$i = 0;
		$x = 0;
		$cls = '';
		
		$PAGE->requires->js('/blocks/mb2funfacts/assets/animateNumber.js');
		$PAGE->requires->js('/blocks/mb2funfacts/assets/inview.js');	
		$PAGE->requires->js('/blocks/mb2funfacts/scripts/mb2funfacts.js');
		
		
		// Language tag
		$currentLang = current_language();
		$langField = self::mb2funfacts_setting('langtag');
		$langArr = explode(',', $langField);
		
		
		$aspeed = self::mb2funfacts_setting('aspeed', 10000);
		$cols = self::mb2funfacts_setting('cols', 4);
		$gutter = self::mb2funfacts_setting('gutter',0);
		$facts = self::mb2funfacts_setting('facts');
		$beforetext = self::mb2funfacts_setting('beforetext');
		$aftertext = self::mb2funfacts_setting('aftertext');
	
	
		// Font size
		$fsArr = explode('|', self::mb2funfacts_setting('fs','2.8|1|3.6|0.8'));
		$fsNum = str_replace(',','.', $fsArr[0]);
		$fsTitle = str_replace(',','.', $fsArr[1]);
		$fsIcon = str_replace(',','.', $fsArr[2]);
		$fsDesc = str_replace(',','.', $fsArr[3]);
		
		
		// Colors
		$bgcolor = self::mb2funfacts_setting('bgcolor') ? ' style="background-color:' . self::mb2funfacts_setting('bgcolor') . ';"' : '';
		$numcolor = self::mb2funfacts_setting('numcolor','#2b353b') ? 'color:' . self::mb2funfacts_setting('numcolor','#2b353b') . ';' : '';
		$titlecolor = self::mb2funfacts_setting('titlecolor') ? 'color:' . self::mb2funfacts_setting('titlecolor') . ';' : '';
		$iconcolor = self::mb2funfacts_setting('iconcolor','#a83332') ? 'color:' . self::mb2funfacts_setting('iconcolor','#a83332') . ';' : '';
		$desccolor = self::mb2funfacts_setting('desccolor') ? 'color:' . self::mb2funfacts_setting('desccolor') . ';' : '';
		
		
		$lines = self::mb2funfacts_line_arr($facts);		
		$lineCount = count($lines);
		
		
		if ($langField !='')
		{
			if (!in_array($currentLang, $langArr))
			{
				$showBlock = false;
			}	
		}
		
			
		if ($this->content !== NULL) 
		{
		  return $this->content;
		}
		
		
		// Set columns layout
		$cowidth = round(100/$cols,10);
		$colpadding = round($gutter/2,10);
		$rowmargin = round($colpadding*-1);					
		
		
		// Block css class
		$cls .= $cols>2 ? ' multicols' : '';
		$cls .= $bgcolor ? ' isbg' : '';
		
		
		$output .= '<div class="mb2funfacts' . $cls . '">';
		$output .= $beforetext !='' ? '<div class="mb2funfacts-before mb2funfacts-clr">' . format_text($beforetext, FORMAT_HTML) . '</div>' : '';
		$output .= '<div class="mb2funfacts-list mb2funfacts-clr" data-aspeed="' . $aspeed . '">';
		
		
		foreach ($lines as $k=>$line) 
		{
			
			$i++;$x++;
			
			// Define item elements
			$lineEl = self::mb2funfacts_line_el($lines, $k);
			$num = isset($lineEl[0]) ? $lineEl[0] : '';
			$title = isset($lineEl[1]) ? $lineEl[1] : '';
			$icon = isset($lineEl[2]) ? $lineEl[2] : 0;
			$desc = isset($lineEl[3]) ? $lineEl[3] : '';
			
			
			// Define icon prefix
			$iconPref = '';
			$isfa = preg_match('@fa-@', $icon);
			$isglyphicon = preg_match('@glyphicon-@', $icon);
			
			if ($isfa)
			{
				$iconPref = 'fa ';
			}
			elseif ($isglyphicon)
			{
				$iconPref = 'glyphicon ';
			}
			
			
            $output .= $i==1 ? '<div class="mb2funfacts-row mb2funfacts-clr" style="margin-left:' . $rowmargin . 'px;margin-right:' . $rowmargin . 'px;">' : '';
			$output .= '<div class="mb2funfacts-item" style="width:' . $cowidth . '%;padding-left:' . $colpadding . 'px;padding-right:' . $colpadding . 'px;padding-bottom:' . $gutter . 'px;">';
			$output .= '<div class="mb2funfacts-item-inner"' . $bgcolor . '>';
			$output .= $icon ? '<i class="' . $iconPref . $icon . '" style="font-size:' . $fsIcon . 'em;' . $iconcolor . '"></i>' : '';
			$output .= '<div class="mb2funfacts-number"> ';
			$output .= '<span class="number" data-num="' . $num . '" style="font-size:' . $fsNum . 'em;' . $numcolor . '">0</span>';
			$output .= '</div>';
			$output .= $title ? '<span class="mb2funfacts-title" style="font-size:' . $fsTitle . 'em;' . $titlecolor . '">' . $title . '</span>' : '';
			$output .= $desc ? '<span class="mb2funfacts-desc" style="font-size:' . $fsDesc . 'em;' . $desccolor . '">' . $desc . '</span>' : '';			
			$output .= '</div>';
			$output .= '</div>';			
			$output .= ($i == $cols || $x == $lineCount) ? '</div>' : ''; // Close row div
			
			
			if ($i == $cols || $x == $lineCount)
			{
				$i = 0;
			}
			
		}
		
		
		$output .= '</div>';
		$output .= $aftertext !='' ? '<div class="mb2funfacts-after mb2funfacts-clr">' . format_text($aftertext, FORMAT_HTML) . '</div>' : '';
		$output .= '</div>';		
			 
	 
		$this->content =  new stdClass;
		$this->content->text = $showBlock ? $output : NULL;
		$this->content->footer = '';
		
	 
		return $this->content;
		
	}
	
	
	
	
	
	
	function mb2funfacts_line_el($linearray, $key) 
	{		
		
		if (isset($linearray[$key]))
		{
			$inlinearray = explode('|', $linearray[$key]);		
			return $inlinearray;
		}
		else
		{
			return false;	
		}
		
	}
	
	
	
	
	
	
	
	function mb2funfacts_line_arr($facts) 
	{		
		
		$linearray = preg_split('/\r\n|\n|\r/',$facts);		
		return $linearray;	
		
	}
	
	
	
		
	
	function mb2funfacts_setting($name, $default = '', $global = '')
	{
					
		if (isset($this->config->$name))
		{			
			$output = ($global !='' && $this->config->$name == '') ? $this->config->$global : $this->config->$name;				
		}
		else
		{
			$output = $default;	
		}
			
			
		return $output;	 	
			
	}	
	
	
	
}