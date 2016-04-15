<?php 
/*** 
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

$show_jfooter_facebook_link = $params->get('show_jfooter_facebook_link',1);
$jfooterFacebookLink = $params->get('jfooter_facebook_link', '#');
$jfooterFacebookIcon = $params->get('jfooter_facebook_icon_path', 'modules/mod_jfooter/assets/images/social_thumbs/facebook.png');
$jfooterFacebookIconPath = modJFooterHelper::parseIconPath($jfooterFacebookIcon);

$show_jfooter_twitter_link = $params->get('show_jfooter_twitter_link', 1);
$jfooterTwitterLink = $params->get('jfooter_twitter_link', '#');
$jfooterTwitterIcon = $params->get('jfooter_twitter_icon_path', 'modules/mod_jfooter/assets/images/social_thumbs/twitter.png');
$jfooterTwitterIconPath = modJFooterHelper::parseIconPath($jfooterTwitterIcon);

$show_jfooter_google_plus_link = $params->get('show_jfooter_google_plus_link', 1);
$jfooterGooglePlusLink = $params->get('jfooter_google_plus_link', '#');
$jfooterGooglePlusIcon = $params->get('jfooter_google_plus_icon' ,'modules/mod_jfooter/assets/images/social_thumbs/google-plus.png');
$jfooterGooglePlusIconPath = modJFooterHelper::parseIconPath($jfooterGooglePlusIcon);

$show_first_item_link = $params->get('jfooter_show_first_item', '1');
$jfooterFirstItemLink = $params->get('jfooter_first_item_link', '#');
$jfooterFirstItemIcon = $params->get('jfooter_first_item_icon_path', '');
$jfooterFirstItemIconPath = modJFooterHelper::parseIconPath($jfooterFirstItemIcon);
$jfooterFirstItemLabel = $params->get('jfooter_first_item_label', '');

$show_second_item_link = $params->get('jfooter_show_second_item', '1');
$jfooterSecondItemLink = $params->get('jfooter_second_item_link', '#');
$jfooterSecondItemIcon = $params->get('jfooter_second_item_icon_path', '');
$jfooterSecondItemIconPath = modJFooterHelper::parseIconPath($jfooterSecondItemIcon);
$jfooterSecondItemLabel = $params->get('jfooter_second_item_label', '');

$show_jfooter_rss_link = $params->get('show_jfooter_rss_link', 1);
$jfooterRssLink = $params->get('jfooter_rss_link', '#');
$jfooterRssIcon = $params->get('jfooter_rss_icon', 'modules/mod_jfooter/assets/images/social_thumbs/rss.png');
$jfooterRssIconPath = modJFooterHelper::parseIconPath($jfooterRssIcon);


?>
<div id="jfooter-follow-us-wrapper">
    <h4><?php echo JText::_('MOD_JFOOTER_FOLLOW_US_LABEL'); ?></h4>
    <?php if($show_jfooter_facebook_link){?>
    <div class="social-link">
        <a href="<?php echo $jfooterFacebookLink; ?>" target="_blank"><img src="<?php echo $jfooterFacebookIconPath; ?>" width="16px" height="16px" /></a>
        <a href="<?php echo $jfooterFacebookLink; ?>" class="social-link-label" target="_blank">Facebook</a>
    </div>
    <?php } ?>
    <?php if($show_jfooter_twitter_link){?>
    <div class="social-link">
        <a href="<?php echo $jfooterTwitterLink; ?>" target="_blank"><img src="<?php echo $jfooterTwitterIconPath ; ?>" width="16px" height="16px" /></a>
        <a href="<?php echo $jfooterTwitterLink; ?>" class="social-link-label" target="_blank">Twitter</a>
    </div>
    <?php } ?>
    <?php if($show_jfooter_google_plus_link){ ?>
    <div class="social-link">
        <a href="<?php echo $jfooterGooglePlusLink; ?>" target="_blank"><img src="<?php echo $jfooterGooglePlusIconPath; ?>" width="16px" height="16px" /></a>
        <a href="<?php echo $jfooterGooglePlusLink; ?>" class="social-link-label" target="_blank">Google +</a>
    </div>
    <?php } ?>
    <?php if($show_first_item_link){ ?>
    <div class="social-link">
        <a href="<?php echo $jfooterFirstItemLink ?>" target="_blank"><img src="<?php echo $jfooterFirstItemIconPath; ?>" width="16px" height="16px" /></a>
        <a href="<?php echo $jfooterFirstItemLink ?>" class="social-link-label" target="_blank"><?php echo $jfooterFirstItemLabel; ?></a>
    </div>
    <?php } ?>
    <?php if($show_second_item_link){ ?>
    <div class="social-link">
        <a href="<?php echo $jfooterSecondItemLink;  ?>" target="_blank"><img src="<?php echo $jfooterSecondItemIconPath; ; ?>" width="16px" height="16px" /></a>
        <a href="<?php echo $jfooterSecondItemLink ?>" class="social-link-label" target="_blank"><?php echo $jfooterSecondItemLabel; ?></a>
    </div>
    <?php } ?>
    <?php if($show_jfooter_rss_link){ ?>
    <div class="social-link">
        <a href="<?php echo $jfooterRssLink ?>" target="_blank"><img src="<?php echo $jfooterRssIconPath; ?>" width="16px" height="16px" /></a>
        <a href="<?php echo $jfooterRssLink; ?>" class="social-link-label" target="_blank">Rss</a>
    </div>
    <?php } ?>
</div>