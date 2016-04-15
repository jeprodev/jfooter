<?php 
/* 
 *    @package  jfooter 
 *    @subpackage modules 
 *    @link http://jeprodev.net
 *    @copyright (C) 2009 - 2011  
 *    @license http://www.gnu.org/copyleft/gpl.html GNU/GPL 
 *    This program is free software: you can redistribute it and/or modify 
 *    it under the terms of the GNU General Public License as published by 
 *    the Free Software Foundation, either version 3 of the License, or 
 *    (at your option) any later version. 
 * 
 *    This program is distributed in the hope that it will be useful, 
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of 
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
 *    GNU General Public License for more details. 
 * 
 *    You should have received a copy of the GNU General Public License 
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */ 
 
// prevent direct access from users  
defined('_JEXEC') or die('Restricted area');

$jfooterFirstAbility = $params->get('jfooter_first_ability', '');
$jfooterFirstAbilityLink = $params->get('jfooter_first_ability_link', '#');
$jfooterSecondAbility = $params->get('jfooter_second_ability', '');
$jfooterSecondAbilityLink = $params->get('jfooter_second_ability_link', '#');
$jfooterThirdAbility = $params->get('jfooter_third_ability', '');
$jfooterThirdAbilityLink = $params->get('jfooter_third_ability_link', '#');
$jfooterFourthAbility = $params->get('jfooter_fourth_ability', '');
$jfooterFourthAbilityLink = $params->get('jfooter_fourth_ability_link', '#');

?>
<div id="footer-abilities">
    <h4><?php echo JText::_('MOD_JFOOTER_ABILITIES_TITLE'); ?></h4>
    <ul class="abilities-list">
        <?php if($jfooterFirstAbility != ''){ ?>
        <li><a href="<?php echo $jfooterFirstAbilityLink; ?>"><?php echo $jfooterFirstAbility; ?></a></li><hr>
        <?php } ?>
        <?php if($jfooterSecondAbility != ''){ ?>
        <li><a href="<?php echo $jfooterSecondAbilityLink; ?>"><?php echo $jfooterSecondAbility; ?></a></li><hr>
        <?php } ?>
        <?php if($jfooterThirdAbility != ''){ ?>
        <li><a href="<?php echo $jfooterThirdAbilityLink; ?>"><?php echo $jfooterThirdAbility; ?></a></li><hr>
        <?php } ?>
        <?php if($jfooterFourthAbility != ''){ ?>
        <li><a href="<?php echo $jfooterFourthAbilityLink; ?>"><?php echo $jfooterFourthAbility; ?></a></li><hr>
        <?php } ?>
    </ul>
</div>