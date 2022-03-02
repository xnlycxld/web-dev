<?php
header('Content-Type: text/plain');
$text = $_GET['text']; 
$check = true;
if(!ctype_alpha($text[0])){
  echo 'NO';
  $check = false;
}
for($i = 0; $i < strlen($text); $i++){
  if(!ctype_alpha($text[$i]) && !is_numeric($text[$i])){
    echo 'NO';
    $check = false;
  }
  break;
}
if($check == true){
    echo 'YEAH!!!'
}