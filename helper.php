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

class modJFooterHelper {
    static function parseIconPath($iconPath){
        $path = str_replace(DIRECTORY_SEPARATOR, '/', $iconPath);
        $tmp = explode('/', $path);
        $tmpPath = "";
        $index = 0; $isSet = false;
        for($ind = 0; $ind < count($tmp); $ind++){
            if($tmp[$ind] == 'modules'){ $index = $ind; $isSet = true;}
        }

        if( count($tmp) && $isSet){
            for($ind = $index; $ind < count($tmp); $ind++ ){
                if($tmpPath == ""){
                    $tmpPath = $tmp[$ind];
                }else{ $tmpPath = $tmpPath .'/'. $tmp[$ind];}
            }
        }else{

        }

        $iconPath = JURI::base(). $tmpPath;
        return $iconPath;
    }
    
    static function parseThemePath($fileName){
        $folder = dirname(__FILE__) . DIRECTORY_SEPARATOR . "tmpl" . DIRECTORY_SEPARATOR . "themes" . DIRECTORY_SEPARATOR;
        $filePath = $folder . $fileName;
        
        if(file_exists($filePath)){
            return $filePath;
        }
        return null;
    }
}
?>