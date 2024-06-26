<?php
$temp = new Test();
echo "Test A: " . Test::$static_property . "\n";
// echo "Test B: " . temp -> get_sp() . "\n";
// echo "Test C: " . $temp -> static_property . "\n";

class Test {
    static $static_property = "I'm static";

    function get_sp(){
        return self::$static_property;
    }
}

/*
This code shows that the property $static_property could be directly referenced from the class itself via the double colon operator in Test A. 
Also, Test B could obtain its value by calling the get_sp method of the object $temp, created from class Test.
But Test C failed, because the static property $static_property was not accessible to the object $temp.

Note how the method get_sp accesses $static_property using the keyword self.
This is how a static property or constant can be directly accessed within a class.

*/