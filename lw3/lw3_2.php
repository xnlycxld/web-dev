<?php
header('Content-Type: text/plain');
$text = $_GET['text']; 
$check = true;

if($text == ''){
    echo 'Идентификатор не может содержать пустую строку';
    $check = false;
}
if ($check !== false){
    if(!ctype_alpha($text[0])){
        echo 'Значение '.$text. ' не может начинаться с ', $text[0];
        $check = false;
    }
}
if ($check !== false){
    for($i = 0; $i < strlen($text); $i++){
        if(!ctype_alpha($text[$i]) && !is_numeric($text[$i])){
            echo 'Значение '. $text.  'не может содержать ', $text[$i];
            $check = false;
        }
    }
}
if($check == true){
    echo 'Значение '.$text. ' является идентификатором';
}