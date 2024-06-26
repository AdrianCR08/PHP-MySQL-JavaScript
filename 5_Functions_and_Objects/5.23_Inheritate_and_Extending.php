<?php
$object = new Subscriber;
$object -> name = "Fred";
$object -> password = "pword";
$object -> phone = "012 345 6789";
$object -> email = "fred@bloggs.com";
$object -> display();

class User1 {
    public $name, $password;

    function save_user(){
        echo  "Save user code goes here";
    }
}

class Subscriber extends User1 {
    public $phone;
    public $email;

    function display() {
        echo "Name: " . $this -> name . "\n";
        echo "Pass: " . $this -> password . "\n";
        echo "Phone: " . $this -> phone . "\n";
        echo "Email: " . $this -> email . "\n";
    }
}