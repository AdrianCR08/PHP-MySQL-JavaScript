<?php
$object1 = new User();
$object1 -> name = "Allice";
$object2 = $object1;
$object2 -> name = "Amy";

echo "object1 name " . $object1 -> name . "\n";
echo "object2 name " . $object2 -> name;

class User {
    public $name;
}
