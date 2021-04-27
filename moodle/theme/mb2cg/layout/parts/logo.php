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


$loginlogomt = theme_mb2cg_theme_setting($PAGE,'loginlogomt');

$customLoginPage = theme_mb2cg_is_login($PAGE, true);
$logoW = ($customLoginPage && theme_mb2cg_theme_setting($PAGE,'loginlogow') !='') ? theme_mb2cg_theme_setting($PAGE,'loginlogow') : theme_mb2cg_theme_setting($PAGE,'logow',180);
$logoMt = ($customLoginPage && ($loginlogomt !='' || $loginlogomt == 0)) ? theme_mb2cg_theme_setting($PAGE,'loginlogomt') : theme_mb2cg_theme_setting($PAGE,'logomt',0,false,true);
$isMt = $logoMt ? 'margin-top:' . $logoMt . 'px;' : '';

?>
<div class="main-logo" style="width:<?php echo $logoW; ?>px;<?php echo $isMt; ?>">
	<a href="<?php echo $CFG->wwwroot; ?>" title="<?php echo theme_mb2cg_theme_setting($PAGE, 'logotitle','Cognitio'); ?>">
		<img src="<?php echo theme_mb2cg_logo_url($PAGE); ?>" alt="<?php echo theme_mb2cg_theme_setting($PAGE, 'logoalttext','Cognitio'); ?>">
	</a>                    
</div>