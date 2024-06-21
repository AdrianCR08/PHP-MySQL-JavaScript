<?php
$a = "1000";
$b = "+1000";

if ($a == $b) echo "1";
echo "\n";
if ($a === $b) echo "2";
echo "\n";

echo gettype($a) . "\n";
echo gettype($b) . "\n";