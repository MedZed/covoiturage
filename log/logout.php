<?php


   session_start();
   
   if(session_destroy()) {
      /*echo 'DECONNEXION';*/
   header('Location: 5; URL = ../');

   }
?>
