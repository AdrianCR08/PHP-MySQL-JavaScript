<?php
// To see if an array is an array and not a variabel or object, use the is_array() function.
$fred = array(5, 4, 3, 2, 1);
//$fred = 1;
echo (is_array($fred)) ? "Is an array\n" : "Is not an array\n";

// To count the number of elements in an array, use the count() function.

echo "Array \"fred\" has " . count($fred) . " elements\n";

// To know how many elements are altogether in a multi-dimensional array, use the count() function.

echo  "The \"fred\" array has " . count($fred, 1) . " elements\n";

// The second parameter is optional and sets the mode to use. It should be either 0 to limit counting to only the top level or 1 to force recursive counting of all subarray elements too.

// To sort an array, use the sort() function.
echo "Before sorting:\n";

foreach($fred as $element) {
    echo $element . ", ";
}
echo "\n";

sort($fred);
echo "After sorting:\n";
for($i = 0; $i < count($fred); $i++) {
    echo $fred[$i] . ", ";
}
echo "\n";
// To sort an array in reverse order, use the rsort() function.
echo "-----Inverse sorting:-----\n";
echo "Before sorting:\n";
foreach($fred as $element) {
    echo $element . ", ";
}
echo "\n";
echo "After sorting:\n";
rsort($fred);
for($i = 0; $i < count($fred); $i++) {
    echo $fred[$i] . ", ";
}
echo "\n";
// To put the elements in random order, use the shuffle() function.

echo "-----Shuffling:-----\n";
echo "Before shuffling:\n";
foreach($fred as $element) {
    echo $element . ", ";
}
echo "\n";
shuffle($fred);
echo "After shuffling:\n";
for($i = 0; $i < count($fred); $i++) {
    echo $fred[$i] . ", ";
}
echo "\n";