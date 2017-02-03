<?php 

   // Берем url и обрабатываем, чтобы был красивый url
    require_once 'core/library/main.php'; //ПОдключаем Библиотеку с выводом 404!
    require_once 'core/library/validator.php'; //ПОдключаем Validator!
   @ $url = strtolower($_GET['url']);

   $urlSegments = explode('/', $url);

   $cntrName = (empty($urlSegments[0])) ? 'main' : $urlSegments[0];
   $actionName = (empty($urlSegments[1])) ? 'action_index' : 'action_' .$urlSegments[1];

   if(file_exists('core/controllers/'.$cntrName.'.php')){
   	  require_once 'core/controllers/'.$cntrName.'.php';  // Закончили обработку

   	  if(function_exists($actionName)){
   	  	  $actionName();
   	  }else{
   	  	show404page();
   	  }
    }else{
   	  	show404page();   // Закончили обработку
    }



