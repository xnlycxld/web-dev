<?php
$email = $_GET['email'];
function formatArray($props) 
{
    return [
        'Email' => $props['Email'] ? $props['Email'] : '',
        'First Name' => $props['First Name'] ? $props['First Name'] : '',
        'Last Name' => $props['Last Name'] ? $props['Last Name'] : '',
        'Age' => $props['Age'] ? $props['Age'] : ''        
    ];
}
function makeString($props, $path, $separator, $assignment) 
{
    $resString = '';
    $keys = ['First Name', 'Last Name', 'Email', 'Age'];
    $curProps = formatArray($props);
    
    for ($i = 0; $i < count($curProps); $i++) 
    {
        $value = $curProps[$keys[$i]] === '' ? '': $curProps[$keys[$i]];
        $resString .= $keys[$i] . ': ' . $value . "\n";
    }
    return $resString;
}
if ($email != '') 
{
    $path = './data/' . $email . '.txt';
    $props = [
        'Email' => $email,
        'First Name' => $_GET['first_name'],
        'Last Name' => $_GET['second_name'],
        'Age' => $_GET['age']
    ];
    $str = makeString($props, $path, '&', ': ');
    file_put_contents($path, $str);
}