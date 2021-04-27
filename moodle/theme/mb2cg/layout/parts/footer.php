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

$footThemeContent =  theme_mb2cg_theme_setting($PAGE, 'foottext', 'Copyright &copy; Cognitio ' . date('Y') . '. All rights reserved.');
$footContent = format_text($footThemeContent, FORMAT_HTML);
$footLogin =  theme_mb2cg_theme_setting($PAGE, 'footlogin', 0);
$footerTools = (is_siteadmin() || $footLogin == 1);
$footericons = theme_mb2cg_theme_setting($PAGE, 'socialfooter',0);
$footermenu = theme_mb2cg_theme_setting($PAGE, 'footermenu');
?>
<footer id="footer" class="dark1">
	<div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="footer-content clearfix">
					<p class="footer-text"><?php echo $footContent; ?></p>
                    <?php if ($footericons || $footermenu) : ?>
                    	<div class="footer-el">
							<?php if ($footermenu) : ?>
								<?php echo theme_mb2cg_static_content($footermenu, true, array('listcls'=>'footer-menu')); ?>
                            <?php endif; ?>
							<?php if ($footericons) : ?>
                                <?php echo theme_mb2cg_social_icons($PAGE); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
				<?php if ($footerTools) : ?>
                    <div class="footer-tools">
                        <?php if ($footLogin) : ?>
                            <?php echo $OUTPUT->login_info(); ?>
                        <?php endif; ?>
                        <?php if ($OUTPUT->course_footer()) : ?>
                        	<p id="course-footer"><?php echo $OUTPUT->course_footer(); ?></p>
                        <?php endif; ?>
                        <?php if ($OUTPUT->page_doc_link()) : ?>
                        	<p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
						<?php endif; ?>
                        <?php echo $OUTPUT->standard_footer_html(); ?>
                    </div>
                <?php endif; ?>
     		</div>
        </div>
    </div>
</footer>
<?php echo $OUTPUT->theme_part('region_after_footer'); ?>
</div><!-- //end #page-b -->
</div><!-- //end #page -->
</div><!-- //end #page-outer -->
<?php echo theme_mb2cg_show_hide_sidebars($PAGE, $vars); ?>
<?php echo theme_mb2cg_iconnav($PAGE); ?>
<?php echo $OUTPUT->theme_part('theme_links'); ?>
<?php if (theme_mb2cg_theme_setting($PAGE, 'scrolltt',0) == 1) :?>
	<?php echo theme_mb2cg_scrolltt($PAGE); ?>
<?php endif; ?>
<?php echo $OUTPUT->theme_part('course_panel'); ?>
<?php if (theme_mb2cg_isblock($PAGE, 'banner-bottom')): ?>
	<?php echo $OUTPUT->blocks('banner-bottom', theme_mb2cg_block_cls($PAGE, 'banner-bottom','none')); ?>
<?php endif; ?>
<?php if (theme_mb2cg_theme_setting($PAGE, 'bookmarks') && isloggedin() && !isguestuser()) : ?>
	<?php echo theme_mb2cg_user_bookmarks_modal(); ?>
<?php endif; ?>
<?php echo $OUTPUT->standard_end_of_body_html(); ?>
</body>
</html>
