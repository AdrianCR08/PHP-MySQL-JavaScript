<?php
$object = new User(" ", " ");
print_r($object);
echo "\n";

$object -> name = "Adrian";
$object -> password = "MyPass";
print_r($object);
echo "\n";

$object -> save_user();

class User {
    public $name, $password;

    function save_user(){
        echo "Save user code goes here";
    }
}