<?php 
/**
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

require_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php');

JHtml::_('jquery.framework');

$document = JFactory::getDocument();
$document->addScript('modules/mod_jfooter/assets/js/jfooter.js');
$document->addStyleSheet('modules/mod_jfooter/assets/css/default.css');

$showFirstBoxContainer = $params->get("jfooter_show_first_box", 1);
$showSecondBoxContainer = $params->get("jfooter_show_second_box", 1);
$showThirdBoxContainer = $params->get("jfooter_show_third_box", 1);
$showFourthBoxContainer = $params->get("jfooter_show_fourth_box", 1);

if($showFirstBoxContainer == 1){
    $firstBoxThemeFileName = $params->get("jfooter_first_box_theme", "");
    $firstBoxThemeFileNamePath = modJFooterHelper::parseThemePath($firstBoxThemeFileName);
    if($firstBoxThemeFileNamePath == null) 
        $showFirstBoxContainer = 0;
}

if($showSecondBoxContainer == 1){
    $secondBoxThemeFileName = $params->get("jfooter_second_box_theme", "");
    $secondBoxThemeFileNamePath = modJFooterHelper::parseThemePath($secondBoxThemeFileName);
    if($secondBoxThemeFileNamePath == null)
        $showSecondBoxContainer = 0;
}
if($showThirdBoxContainer == 1){
    $thirdBoxThemeFileName = $params->get("jfooter_third_box_theme", "");
    $thirdBoxThemeFileNamePath = modJFooterHelper::parseThemePath($thirdBoxThemeFileName);
    if($thirdBoxThemeFileNamePath == null) 
        $showThirdBoxContainer = 0;
}
if($showFourthBoxContainer == 1){
    $fourthBoxThemeFileName = $params->get("jfooter_fourth_box_theme", "");
    $fourthBoxThemeFileNamePath = modJFooterHelper::parseThemePath($fourthBoxThemeFileName);
    if($fourthBoxThemeFileNamePath == null) 
        $showFourthBoxContainer = 0; 
}

$jFooterScript = 'jQuery(document).ready(function(){';
$jFooterScript .= 'jQuery("#jfooter-container").jFooterLayer();';
$jFooterScript .= '});';

$document->addScriptDeclaration($jFooterScript);

require_once JModuleHelper::getLayoutPath('mod_jfooter', $params->get('layout', 'default'));