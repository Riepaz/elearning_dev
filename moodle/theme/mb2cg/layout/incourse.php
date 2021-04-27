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

$sidebar = theme_mb2cg_isblock($PAGE, 'side-pre');
$sidebarPos = theme_mb2cg_theme_setting($PAGE, 'sidebarpos', 'classic');
$access = theme_mb2cg_site_access();

if ($sidebar)
{
	$contentCol = 'col-md-9 col-md-push-3';
	$sideCol = 'col-md-3 col-md-pull-9';

	if ($sidebarPos === 'right')
	{
		$contentCol = 'col-md-9';
		$sideCol = 'col-md-3';
	}
}
else
{
	$contentCol = 'col-md-12';
}


?>
<?php echo $OUTPUT->theme_part('head'); ?>
<?php echo $OUTPUT->theme_part('header'); ?>
<?php echo $OUTPUT->theme_part('region_slider'); ?>
<?php echo $OUTPUT->theme_part('page_header'); ?>
<?php echo $OUTPUT->theme_part('site_menu'); ?>
<?php echo $OUTPUT->theme_part('region_after_slider'); ?>
<?php echo $OUTPUT->theme_part('region_before_content'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
     		<div class="content-col <?php echo $contentCol; ?>">
            	<div id="page-content">
                	<?php echo $OUTPUT->course_content_header(); ?>
					<?php if (theme_mb2cg_isblock($PAGE, 'content-top')) : ?>
                		<?php echo $OUTPUT->blocks('content-top', theme_mb2cg_block_cls($PAGE, 'content-top','none')); ?>
             		<?php endif; ?>
                	<?php echo $OUTPUT->main_content(); ?>
                    <?php if (theme_mb2cg_isblock($PAGE, 'content-bottom')) : ?>
                   		<?php echo $OUTPUT->blocks('content-bottom', theme_mb2cg_block_cls($PAGE, 'content-bottom','none')); ?>
                    <?php endif; ?>
                    <?php echo theme_mb2cg_moodle_from(2017111300) ? $OUTPUT->activity_navigation() : ''; ?>
                    <?php echo $OUTPUT->course_content_footer(); ?>
                </div>
       		</div><?php //echo theme_mb2cg_fix_html_lesson(); ?>
            <?php if ($sidebar) : ?>
                <div class="sidebar-col <?php echo $sideCol; ?>">
                <?php echo $OUTPUT->blocks('side-pre', theme_mb2cg_block_cls($PAGE, 'side-pre')); ?>
                </div>
            <?php endif; ?>
    	</div>
	</div>
</div>
<?php echo theme_mb2cg_moodle_from(2018120300) ? $OUTPUT->standard_after_main_region_html() : '' ?>
<?php echo $OUTPUT->theme_part('region_after_content'); ?>
<?php echo $OUTPUT->theme_part('region_adminblock'); ?>
<?php echo $OUTPUT->theme_part('region_bottom'); ?>
<?php echo $OUTPUT->theme_part('region_before_footer'); ?>
<?php echo $OUTPUT->theme_part('region_footer_abcd'); ?>
<?php echo $OUTPUT->theme_part('footer', array('sidebar'=>$sidebar)); ?>
