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

$show_webDesigner_website_link = $params->get('show_web_designer_website_link', 1);
$show_administrator_email = $params->get('jfooter_show_administrator_email', 1);

$administrator_email = $params->get('jfooter_administrator_email', '#');
$webDesignerWebsiteLink = $params->get('jfooter_web_designer_website_link', '#');

$webDesignerName = $params->get('jfooter_web_designer_name', 'jeprodev');

?>
<div id="jfooter-contact-container">
    <h4><?php echo JText::_('MOD_JFOOTER_WRITE_TO_US_LABEL'); ?></h4>
    <div id="jfooter-contact-form-wrapper" >
        <form id="jfooter-contact-form" class="horizontal-form" >
            <div class="control-group" >
                <div class="controls" ><input type="text" name="jform[sender_name]" id="jform_sender_name" /></div>
            </div>
            <div class="control-group" >
                <div class="controls" ><input type="text" name="jform[sender_mail]" id="jform_sender_mail" /></div>
            </div>
            <div class="control-group" >
                <div class="controls message" ><textarea type="text" name="jform[sender_mail]" id="jform_sender_mail" ></textarea></div>
            </div>
            <div class="control-group" >
                <div class="controls" ><input type="submit" name="jform[send]" class="btn" value="<?php echo JText::_('MOD_JFOOTER_SEND'); ?>" /></div>
            </div>
        </form>
    </div>
</div>