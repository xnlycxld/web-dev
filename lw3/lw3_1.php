<?php
header("Content-Type: text/plain");
$text = $_GET['text'];   
$ch = '';
$next = '';
$start = true;
for ($i = 0; $i < strlen($text); $i++) 
{
    $ch = $text[$i];
    $next = $text[$i+1];
    if ($ch == ' ') 
    {
        if ($next !== ' ' && !$start && $next !== '.') 
        {
            echo ' ';
        }
    } 
    else 
    {
        $start = false;
        echo $ch;
    }
}