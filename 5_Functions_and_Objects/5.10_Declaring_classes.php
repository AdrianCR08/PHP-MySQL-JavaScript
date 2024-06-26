<?php
//$object = new User;
//print_r($object);

class User
{
    public $name, $password;
    
    function save_user(){
        echo "Save User code goes here\n";
    }
}

$temp = new User($name = "Adrian", $password = "P4ssw0rd");
print_r($temp);

