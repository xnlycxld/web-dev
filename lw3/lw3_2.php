<?php
header('Content-Type: text/plain');

function CheckIdent($text){
   if(!ctype_alpha($text[0])){
      echo 'no идендификатор не может начинаться с ', $text[0];
      return;
   }
   for($i = 0; $i < strlen($text); $i++){
      if(!ctype_alpha($text[$i]) && !is_numeric($text[$i])){
         echo 'no символ ', $text[$i], ' является недопустимым символом в индендефикаторе';
         return;
      }
   }
   echo 'yes';
}

echo CheckIdent($_GET["identifier"]);