<?php
// Logical operator Description
// AND TRUE if both operands are TRUE
// OR TRUE if either operand is TRUE
// XOR TRUE if one of the two operands is TRUE
// ! (NOT) TRUE if the operand is FALSE, or FALSE if the operand is TRUE

$a = 1; $b = 0;

echo ($a AND $b) . "\n";
echo ($a OR $b)  . "\n";
echo ($a XOR $b) . "\n";
echo !$a         . "\n";
?>
