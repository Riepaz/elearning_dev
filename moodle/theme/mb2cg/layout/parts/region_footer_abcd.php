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


$a = theme_mb2cg_isblock($PAGE, 'footer-a');
$b = theme_mb2cg_isblock($PAGE, 'footer-b');
$c = theme_mb2cg_isblock($PAGE, 'footer-c');
$d = theme_mb2cg_isblock($PAGE, 'footer-d');


$col1 = (($a && !$b && !$c && !$d) || (!$a && $b && !$c && !$d) || (!$a && !$b && $c && !$d) || (!$a && !$b && !$c && $d));
$col2 = (($a && $b && !$c && !$d) || ($a && !$b && $c && !$d) || ($a && !$b && !$c && $d) || (!$a && $b && $c && !$d) || (!$a && $b && !$c && $d) || (!$a && !$b && $c && $d));
$col3 = (($a && $b && $c && !$d) || ($a && $b && !$c && $d) || ($a && !$b && $c && $d) || (!$a && $b && $c && $d));
$col4 = ($a && $b && $c && $d);


if ($col4)
{
	$col = '3';	
}
elseif ($col3)
{
	$col = '4';	
}
elseif ($col2)
{
	$col = '6';
}
else
{
	$col = '12';	
}


$abcd = array('a','b','c','d');


if ($a || $b || $c || $d) : ?>
<div id="footer-abcd" class="dark1">
	<div class="container-fluid">
		<div class="row">
			<?php foreach ($abcd as $block) : ?>
            	<?php if (theme_mb2cg_isblock($PAGE, 'footer-' . $block)) : ?>
                	<div class="col-md-<?php echo $col; ?>">
						<?php echo $OUTPUT->blocks('footer-' . $block, theme_mb2cg_block_cls($PAGE, 'footer-' . $block,'bottom')); ?>
                    </div>                 
                <?php endif; ?>                           
            <?php endforeach; ?>           
		</div>
	</div>
</div>
<?php endif; ?>