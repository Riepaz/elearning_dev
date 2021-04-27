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


$regionArr = explode(',', theme_mb2cg_theme_setting($PAGE,'regionnogrid'));
$regionGrid = !in_array('after-content', $regionArr);


// Style class
$cls = 'theme-section';
$cls .= ' ' . theme_mb2cg_theme_setting($PAGE,'acscheme','light');
$cls .= theme_mb2cg_theme_setting($PAGE,'acbgpre') !='' ? ' pre-bg' . theme_mb2cg_theme_setting($PAGE,'acbgpre') : '';


// Padding top and bottom and fisrt column width
$paddingArr = explode(',', theme_mb2cg_theme_setting($PAGE,'acpadding','40,0'));
$paddingStyle = ' style="padding-top:' . $paddingArr[0] . 'px;padding-bottom:' . $paddingArr[1] . 'px;"';
$fcw = theme_mb2cg_theme_setting($PAGE,'acfcolw', '6');
$isFcw = ($fcw<2 || $fcw>9) ? 6 : $fcw;


// Background image
$bgImage = theme_mb2cg_theme_setting($PAGE, 'acbgimage', '', true);
$isBgImage = $bgImage !='' ? ' style="background-image:url(\'' . $bgImage . '\');"' : '';


$a = theme_mb2cg_isblock($PAGE, 'after-content-a');
$b = theme_mb2cg_isblock($PAGE, 'after-content-b');


$oneCol = ((!$a&&$b) || ($a&&!$b));


if ($oneCol)
{
	$aw = 12;
	$bw = 12;
}
else 
{
	$aw = $isFcw;
	$bw = round(12-$aw);
}


if ( $a || $b) : ?>
<?php if (theme_mb2cg_theme_setting($PAGE,'acsheader') !='') : ?>
<div id="after-content-header" class="theme-section-header <?php echo theme_mb2cg_theme_setting($PAGE,'acsheaderscheme','light'); ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="theme-col col-md-12">
      			<?php echo format_text(theme_mb2cg_theme_setting($PAGE,'acsheader'), FORMAT_HTML); ?>
     		</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div id="after-content" class="<?php echo $cls; ?>"<?php echo $isBgImage; ?>>
    <div class="section-inner">
        <?php if (!$regionGrid)	: ?>		
			<?php echo $a ? $OUTPUT->blocks('after-content-a', theme_mb2cg_block_cls($PAGE, 'after-content-a','none')) : ''; ?>
			<?php echo $b ? $OUTPUT->blocks('after-content-b', theme_mb2cg_block_cls($PAGE, 'after-content-b','none')) : ''; ?>
		<?php else : ?>
         	<div class="container-fluid">
            	<div class="row">
        			<?php if ($a) : ?>
                    	<div class="theme-col col-md-<?php echo $aw; ?>">
                        	<div class="col-inner <?php echo theme_mb2cg_block_cls($PAGE, 'after-content-a','none'); ?>"<?php echo $paddingStyle; ?>>
                            	<?php echo $OUTPUT->blocks('after-content-a'); ?>
                            </div>                        	 
                        </div>
                    <?php endif; ?>
                    <?php if ($b) : ?>
                    	<div class="theme-col col-md-<?php echo $bw; ?>">
                        	<div class="col-inner <?php echo theme_mb2cg_block_cls($PAGE, 'after-content-b','none'); ?>"<?php echo $paddingStyle; ?>>
                            	<?php echo $OUTPUT->blocks('after-content-b'); ?>
                            </div>                        	 
                        </div>
                    <?php endif; ?>
        		</div>
        	</div>
        <?php endif; ?>       
    </div>
</div>
<?php endif; ?>