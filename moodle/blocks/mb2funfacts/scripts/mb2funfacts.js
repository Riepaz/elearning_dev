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
jQuery(document).ready(function($){
	
		
		$('.mb2funfacts-item').each(function(){
			
			var factItem = $(this);
			var parentTag = factItem.parent().parent();
			var animateSpeed = parentTag.data('aspeed');
			var numberTag = factItem.find('.mb2funfacts-number .number');
			var number = numberTag.data('num');		
			var numbersAnimate = true;				 
		  
			
				factItem.bind('inview', function(event, visible) {
				
			 	
				var space_separator_number_step = $.animateNumber.numberStepFactories.separator(' ');
				
				
				if(visible == true && numbersAnimate == true) {
            		
					numbersAnimate = false;	
					
					numberTag.animateNumber({					
						number: number,
						numberStep: space_separator_number_step					
					},animateSpeed);							
						
				}				
				
			});	
		
			
		});		
		
});