<?php
$paper = array("Copier" => "Copier & Multipurpose",
               "Inkjet" => "Inkjet Printer",
               "Laser" => "Laser Printer",
               "Photo" => "Photographic Paper");

while (list($item, $description) = myEach($paper))
{
    echo "$item: $description\n";
}

function myEach(&$array){ // Replacement for the deprecated each() function
    $key = key($array);
    $result = ($key === null) ? false :
        [$key, current($array), 'key', 'value' => current($array), '1' => $key, '0' => current($array)];
        next($array);
        return $result;
}