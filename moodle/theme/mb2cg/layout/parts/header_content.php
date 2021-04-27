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

$isLoginPage = theme_mb2cg_is_login($PAGE);
$topmenu = theme_mb2cg_theme_setting($PAGE, 'topmenu');
?>

<div class="header-content" style="margin-top:<?php echo theme_mb2cg_theme_setting($PAGE,'headerctop',7,false,true) ; ?>px;">
	<?php if ($topmenu) : ?>
        <div class="header-content-a clearfix">
			<?php echo theme_mb2cg_static_content($topmenu, true, array('listcls'=>'top-menu')); ?>			
        </div>
    <?php endif; ?>
	<div class="header-content-b clearfix">
		<?php echo !$isLoginPage ? theme_mb2cg_login_form() : ''; ?>
        <?php if (theme_mb2cg_moodle_from(2016120500) && (isloggedin() && !isguestuser())) : // Feature since Moodle 3.2 ?>
            <div class="theme-plugins">
                <?php echo $OUTPUT->navbar_plugin_output(); ?>
            </div>
        <?php endif; ?>
        <div class="header-tools">
     		<?php if (theme_mb2cg_theme_setting($PAGE,'langmenu') == 2) : ?>
        		<?php echo theme_mb2cg_language_list (); ?>
           <?php endif; ?>
			<?php if (theme_mb2cg_theme_setting($PAGE, 'fontsizer', 1) == 1) : ?>
                <?php echo theme_mb2cg_userfriendly_el($PAGE); ?>
            <?php endif; ?>
            <?php echo theme_mb2cg_siteinfo($PAGE); ?>
            <?php if (theme_mb2cg_theme_setting($PAGE, 'socialheader',0) == 1) : ?>
                <?php echo theme_mb2cg_social_icons($PAGE,array('pos'=>'header')); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
