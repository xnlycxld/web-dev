<?php
header("Content-Type: text/plain"); //header отправляет HTTP заголовок, text - это тип сообщения, где text - текстовое сообщение, а plain - подтип, plain - текст без форматирования
$text = $_GET['text'];
$ch = '';
$next = '';
$start = true;

if ($text !== null){
for ($i = 0; $i < strlen($text); $i++){
    $ch = $text[$i];
    $next = $text[$i+1];
    if ($ch === ' ') {
        if ($next !== ' ' && !$start && $next !== '.') {
            echo ' ';
        }
    } 
    else {
        $start = false;
        echo $ch;
    }
}
}
else{
    echo 'Введите значние..';
}