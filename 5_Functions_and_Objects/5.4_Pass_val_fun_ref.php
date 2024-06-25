<?php
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . " " . "\n";
fix_names($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3 . " " . "\n";

function fix_names(&$n1, &$n2, &$n3){
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}


/*
GitHub Copilot
used /explain (rerun without)
Passing arguments by reference in PHP allows you to modify the original values of variables directly within a function. By using the & symbol before the parameter name in the function definition, you indicate that the argument should be passed by reference.

In the provided code excerpt, the function fix_names takes three arguments ($n1, $n2, and $n3) passed by reference. Within the function, the values of these variables are modified using the ucfirst and strtolower functions to ensure that the first letter is capitalized and the rest of the letters are in lowercase.

By passing the arguments by reference, any changes made to $n1, $n2, and $n3 within the function will also affect the original variables outside of the function. This allows you to update the values of variables directly without needing to return them from the function.

It's important to note that passing arguments by reference should be used with caution, as it can make code harder to understand and maintain. It's generally recommended to use this approach sparingly and only when necessary.
*/