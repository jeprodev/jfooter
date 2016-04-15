<?php 
/**
 *  @package    modules
 *  @subpackage mod_jfooter
 *  @link       http://jeprodev.net
 *  @copyright (C) 2009 - 2012
 *  @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 * 
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 * 
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */ 
 
// prevent direct access from users  
defined('_JEXEC') or die('Restricted area');

?>
<div id="jfooter-container">
    <?php if($showFirstBoxContainer == 1){ ?>
    <div class="jfooter-theme-box-container" id="<?php echo rtrim($firstBoxThemeFileName, '.php'); ?>" ><?php require_once($firstBoxThemeFileNamePath); ?></div>
    <?php } ?>
    <?php if($showSecondBoxContainer == 1){ ?>
    <div class="jfooter-theme-box-container" id="<?php echo rtrim($secondBoxThemeFileName, '.php'); ?>" ><?php require_once($secondBoxThemeFileNamePath); ?></div>
    <?php } ?>
    <?php if($showThirdBoxContainer == 1){ ?>
    <div class="jfooter-theme-box-container" id="<?php echo rtrim($thirdBoxThemeFileName, '.php');?>" ><?php require_once($thirdBoxThemeFileNamePath); ?></div>
    <?php } ?>
    <?php if($showFourthBoxContainer == 1){ ?>
    <div class="jfooter-theme-box-container" id="<?php echo rtrim($fourthBoxThemeFileName, '.php'); ?>" ><?php require_once($fourthBoxThemeFileNamePath); ?></div>
    <?php } ?>
</div>
<div id="jfooter_bottom_wrapper" >
    <ul>
        <li id="first-item">
            <span id="jfooter_term_of_use"  class="small" ><a href="#" ><?php echo JText::_('MOD_JFOOTER_ELIGIBILITY_CONDITIONS'); ?></a></span> |
            <span id="jfooter_term_of_use" class="small" ><a href="#" ><?php echo JText::_('MOD_JFOOTER_PRIVACY_POLICIES'); ?></a></span>
        </li>
        <li id="last-item" >
            <span id="jfooter_term_of_use" class="small" >&copy; <a href="<?php echo JURI::base(); ?>" target="_self" ><?php echo JFactory::getConfig()->get('sitename'); ?></a>, <?php echo JText::_('MOD_JFOOTER_ALL_RIGHT_RESERVED'); ?>
                <a href="<?php echo $params->get('jfooter_web_designer_url', 'http://jeprodev.net'); ?>" target="_blank" ><?php echo ucfirst($params->get('jfooter_web_designer_name', 'jeprodev')); ?></a>
            </span>
        </li>
        <div style="clear: both;" />
    </ul>
</div>