<?php
     ini_set('display_errors', true);
     include_once('./include/MenuBoard.php');
     
     MenuBoard::$clientclass = 'MCDV1';
     
     $mb = new MenuBoard();
     $mb->generateContent();
?>
