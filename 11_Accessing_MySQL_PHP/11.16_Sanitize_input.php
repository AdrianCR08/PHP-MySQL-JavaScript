<?php
function mysql_fix_string($pdo, $string){
    if (ini_get('magic_quotes_gpc')) $string = stripslashes($string);
    return $pdo -> quote($string);
}