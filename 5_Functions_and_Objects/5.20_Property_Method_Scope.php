<?php
// PHP has three scope resolution operators:
// 1. Public - can be accessed from anywhere.
// 2. Protected - can be accessed only within the class itself and by inherited and parent classes. 
// 3. Private - can only be accessed within the class that defines the property or method. 

/*
• Use public when outside code should access this member and extending classes
should also inherit it.

• Use protected when outside code should not access this member but extending
classes should inherit it.

• Use private when outside code should not access this member and extending
classes also should not inherit it.
*/

class Example {
    var $name = "Michael"; // Same as public but deprecated.
    public $age = 23; // Public property
    protected $usercount; // Protected Property

    // Private Method
    private function admin(){
        // Admin code goes here
    }
}