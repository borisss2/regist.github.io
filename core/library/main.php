<?php 
   function show404page(){
   	  header("HTTP/1.1 404 Not Found");

   	  //todo заменить на view
   	  echo '404 page';
   }

   function renderView($viewName, $formErorrs){   //  Передаем сюда имя вьюшки которую будем рендерить
       @ include 'core/views/'.$viewName.'.php';
   }