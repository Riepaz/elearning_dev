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
$regionGrid = !in_array('bottom', $regionArr);


// Style class
$cls = 'theme-section';
$cls .= ' ' . theme_mb2cg_theme_setting($PAGE,'btscheme','light');
$cls .= theme_mb2cg_theme_setting($PAGE,'btbgpre') !='' ? ' pre-bg' . theme_mb2cg_theme_setting($PAGE,'btbgpre') : '';


// Padding top and bottom and fisrt column width
$paddingArr = explode(',', theme_mb2cg_theme_setting($PAGE,'btpadding','40,0'));
$paddingStyle = ' style="padding-top:' . $paddingArr[0] . 'px;padding-bottom:' . $paddingArr[1] . 'px;"';
$fcw = theme_mb2cg_theme_setting($PAGE,'btfcolw', '6');
$isFcw = ($fcw<2 || $fcw>9) ? 6 : $fcw;


// Background image
$bgImage = theme_mb2cg_theme_setting($PAGE, 'btbgimage', '', true);
$isBgImage = $bgImage !='' ? ' style="background-image:url(\'' . $bgImage . '\');"' : '';


$a = theme_mb2cg_isblock($PAGE, 'bottom-a');
$b = theme_mb2cg_isblock($PAGE, 'bottom-b');


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
<?php if (theme_mb2cg_theme_setting($PAGE,'btsheader') !='') : ?>
<div id="bottom-header" class="theme-section-header <?php echo theme_mb2cg_theme_setting($PAGE,'btsheaderscheme','light'); ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="theme-col col-md-12">
      			<?php echo theme_mb2cg_theme_setting($PAGE,'btsheader'); ?>
     		</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div id="bottom" class="<?php echo $cls; ?>"<?php echo $isBgImage; ?>>
    <div class="section-inner">
        <?php if (!$regionGrid)	: ?>		
			<?php echo $a ? $OUTPUT->blocks('bottom-a', theme_mb2cg_block_cls($PAGE, 'bottom-a','none')) : ''; ?>
			<?php echo $b ? $OUTPUT->blocks('bottom-b', theme_mb2cg_block_cls($PAGE, 'bottom-b','none')) : ''; ?>
		<?php else : ?>
         	<div class="container-fluid">
            	<div class="row">
        			<?php if ($a) : ?>
                    	<div class="theme-col col-md-<?php echo $aw; ?>">
                        	<div class="col-inner <?php echo theme_mb2cg_block_cls($PAGE, 'bottom-a','none'); ?>"<?php echo $paddingStyle; ?>>
                            	<?php echo $OUTPUT->blocks('bottom-a'); ?>
                            </div>                        	 
                        </div>
                    <?php endif; ?>
                    <?php if ($b) : ?>
                    	<div class="theme-col col-md-<?php echo $bw; ?>">
                        	<div class="col-inner <?php echo theme_mb2cg_block_cls($PAGE, 'bottom-b','none'); ?>"<?php echo $paddingStyle; ?>>
                            	<?php echo $OUTPUT->blocks('bottom-b'); ?>
                            </div>                        	 
                        </div>
                    <?php endif; ?>
        		</div>
        	</div>
        <?php endif; ?>       
    </div>
</div>
<?php endif; ?>