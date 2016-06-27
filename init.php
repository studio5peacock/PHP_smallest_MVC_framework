<?php
if(!defined('ISEXIST'))
    exit("please start from entrance");
    

    
 header("Content-Type:text/html;charset=utf-8");
 if(!defined('ROOT_PATH'))
    define('ROOT_PATH',str_replace('','/',dirname(__FILE__)));





 
 require ROOT_PATH.'/a/config.php';
 
 require ROOT_PATH.'/a/controller.php';
 
 ?>
 