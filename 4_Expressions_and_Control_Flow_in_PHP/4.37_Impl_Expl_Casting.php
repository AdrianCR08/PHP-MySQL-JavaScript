<?php
$a = 56;
$b = 12;
$c = $a / $b;

echo $c;

// To cast $c to an integer, you can use the (int) cast:

$c = (int) ($a / $b);
echo "\n";
echo $c;

// Cast Types                    |                   Description                  
// ----------------------------- | ---------------------------------------------
// (int), (integer)              | Cast to integer by dropping the decimal part.
// (bool), (boolean)             | Cast to boolean.
// (float), (double), (real)     | Cast to float.
// (string)                      | Cast to string.
// (array)                       | Cast to array.
// (object)                      | Cast to object.

// Example usage:
$d = 3.14;
$e = (int) $d; // $e will be 3

$f = "123";
$g = (float) $f; // $g will be 123.0

$h = true;
$i = (string) $h; // $i will be "1"

$j = "hello";
$k = (bool) $j; // $k will be true

$l = 123;
$m = (array) $l; // $m will be [123]

$n = "stdClass";
$o = (object) $n; // $o will be an object of class stdClass

$p = "null";
//$q = (unset) $p; // $q will be NULL