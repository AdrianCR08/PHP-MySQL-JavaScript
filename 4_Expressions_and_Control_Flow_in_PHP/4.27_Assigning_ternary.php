<?php
$enough = $fuel <= 1 ? FALSE : TRUE;

// The ternary operator in PHP is a shorthand for the `if-else` statement, used for conditional assignment. The syntax is
// `condition ? exprIfTrue : exprIfFalse`. 
// It evaluates the condition: if the condition is `true`, it returns `exprIfTrue`; otherwise, it returns `exprIfFalse`.

$saved = $saved >= $new ? $saved : $new;

/*
Condition: $saved >= $new

    1. This checks if $saved is greater than or equal to $new.
    exprIfTrue: $saved
    2. If the condition is true (meaning $saved is greater than or equal to $new), then $saved retains its current value.
    3. exprIfFalse: $new
    If the condition is false (meaning $saved is less than $new), then $saved is assigned the value of $new
 */