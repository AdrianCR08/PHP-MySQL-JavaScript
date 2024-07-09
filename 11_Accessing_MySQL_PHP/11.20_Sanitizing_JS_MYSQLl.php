<?php
function mysql_entitities_fix_string($pdo, $string1){
    return htmlentities(mysql_fix_string($pdo, $string1));
}

function mysql_fix_string($pdo, $string){
    if (ini_get('magic_quotes_gpc')) $string = stripslashes($string);
    return $pdo -> real_escape_string($string1);
}