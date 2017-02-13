<?php
   if(session_destroy()) {
   header('Refresh: 0; URL = ../');
   }
?>