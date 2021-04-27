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

$customLoginPage = theme_mb2cg_is_login($PAGE, true);
$isPageBg = theme_mb2cg_pagebg_image($PAGE);

?>
<body <?php echo $OUTPUT->body_attributes(theme_mb2cg_body_cls($PAGE)) . $isPageBg; ?>>
<?php echo $OUTPUT->standard_top_of_body_html(); ?>
<?php if (theme_mb2cg_theme_setting($PAGE, 'loadingscr',0) == 1) : ?>
	<?php echo theme_mb2cg_loading_screen($PAGE); ?>
<?php endif; ?>
<?php //echo !$customLoginPage ? $OUTPUT->theme_part('sliding_panel') : ''; ?>
<div id="page-outer">
<div id="page">
<div id="page-a">
    <div id="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                 	<?php echo $OUTPUT->theme_part('logo'); ?>
					<?php if (!$customLoginPage) : ?>
                    	<div class="mobile-nav"><?php echo $OUTPUT->custom_menu(); ?></div>
                    <?php endif; ?>
                    <?php echo !$customLoginPage ? $OUTPUT->theme_part('header_content') : ''; ?>
                    <?php echo $customLoginPage ? theme_mb2cg_login_links() : ''; ?>
                </div>
            </div>
        </div>
    </div>
	<?php if (!$customLoginPage && theme_mb2cg_isblock($PAGE, 'banner-top')): ?>
		<?php echo $OUTPUT->blocks('banner-top', theme_mb2cg_block_cls($PAGE, 'banner-top','none')); ?>
	<?php endif; ?>
    <?php if (theme_mb2cg_theme_setting($PAGE, 'stickynav', 0) == 1 && !$customLoginPage) : ?>
    	<div class="sticky-nav-element-offset"></div>
    <?php endif; ?>
    <?php if (!$customLoginPage) : ?>
        <div id="main-navigation">
            <div class="main-navigation-inner">
                <div class="container-fluid menu-container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $OUTPUT->custom_menu(); ?>
                        </div>
                    </div>
                </div>
                <?php echo theme_mb2cg_search_form(); ?>
            </div>
        </div>
        <?php if (theme_mb2cg_isblock($PAGE, 'after-header')) : ?>
        <div id="after-header">
            <div class="container-fluid">
            	<div class="row">
             		<div class="col-md-12">
						<?php echo $OUTPUT->blocks('after-header', theme_mb2cg_block_cls($PAGE, 'after-header','none')); ?>
           			</div>
            	</div>
            </div>
        </div>
        <?php endif; ?>
    <?php endif; ?>
</div><!-- //end #page-a -->
<div id="page-b">
