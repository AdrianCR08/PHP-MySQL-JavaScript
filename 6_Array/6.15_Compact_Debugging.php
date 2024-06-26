<?php
$j = 23;
$temp = "Hello";
$address = "1 Old Street";
$age = 61;

print_r(compact(explode(' ', 'j temp address age')));


// Another usefull function is the reset() function. It resets the internal pointer of an array to the first element and returns the value of the first array element.

reset($fred); // Throw away return value
$item = reset($fred); // Keep first element of the array in $item

// And finally the end() function. It sets the internal pointer of an array to the last element and returns the value of the last array element.

end($fred); // Throw away return value
$item = end($fred); // Keep last element of the array in $item
