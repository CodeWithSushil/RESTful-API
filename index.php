<?php
define('APP_ROOT', __DIR__);

require_once APP_ROOT.'/vendor/autoload.php';

spl_autoload_register(function($class){
  
  $file = str_replace("\\", DIRECTORY_SEPARATOR, $class.'.php');
	$path = APP_ROOT.'/app/'.$file;
  
  if(file_exists($path)){
    require_once($path);
	}
});

session_start();



