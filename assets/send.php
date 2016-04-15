<?php
/*
 *    @package  jfooter
 *    @subpackage modules
 *    @link http://jeprodev.fr.nf
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
define('_JEXEC',1);
// prevent direct access from users
defined('_JEXEC') or die('Restricted area');
$directory = dirname(__FILE__);

$basePathIsSet = false;
$basePath = '../../../';
$temp = str_replace(DIRECTORY_SEPARATOR, '/', $directory);
$tempArr = explode('/', $temp);

$base = "";
$index = null;
for($ind = 0; $ind < count($tempArr); $ind++){
    if(($tempArr[$ind] == 'modules')){
        $index = $ind;
    }
}
for($ind = 0; $ind < $index; $ind++){
    if($base == ""){
        $base = $tempArr[$ind];
    }else{
        $base .= '/'. $tempArr[$ind];
    }
}

if(!defined('JPATH_BASE')){ define('JPATH_BASE', $base);}

require_once ($basePath . 'includes/defines.php');
require_once($basePath. 'includes/framework.php');

// Mark afterLoad in the profiler.
//JDEBUG ? $_PROFILER->mark('afterLoad') : null;

// Instantiate the application.
$app = JFactory::getApplication('site');

// Initialise the application.
$app->initialise();

$request = $app->input;
$subject = "Service requested from " . $request->get('customername');
$to = $request->get('to');
$from = array($request->get('from'), $request->get('customername'));
$msg = $request->get('msg');

//Invoke JMail class
$mailer = JFactory::getMailer();

/** set the sender * /
$mailer->setSender($from);
$mailer->addRecipient($to);
$mailer->setSubject($subject);
$mailer->setBody($msg); */
$mailer->setSender('jeff@yahoo.fr');
$mailer->addRecipient('jeprodev@gmail.com');
$mailer->setSubject("test");
$mailer->setBody("bonjour ceci est un test");

$success = $mailer->send();
echo $request->get('from');


/*$success = $mailer->send();
echo $success; */
?>