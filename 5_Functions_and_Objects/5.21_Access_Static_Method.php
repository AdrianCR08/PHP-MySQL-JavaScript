<?php
User::pwd_string();
// The :: operator is also known as 
// the scope resolution operator.

// If you try to access $this->property or $this->method from a static method, you will get an error.

class User {
    static function pwd_string(){
        echo "Please enter your password";
    }
}