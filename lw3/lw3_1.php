<?php
header("Content-Type: text/plain");
$text = $_GET['text'];
function getGetParameter(string $text): ?string{
    return isset($_GET[$text]) ? $_GET['$text'] : null;
}

getGetParameter($text);
$text = trim($text, ' ');
while(strpos($text, '  '))
    $text = str_replace('  ', ' ', $text);
$length = strlen($text);
if ($length == 0){
    echo 'empty string';
} 
else{
    echo $text;
}