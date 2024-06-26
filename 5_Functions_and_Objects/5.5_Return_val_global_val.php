<?php
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "\n";
fix_names();

echo $a1 . " " . $a2 . " " . $a3 .  "\n";

function fix_names(){
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));
}

/*
- Local variables are accessible just from the part of your code where you define them. If they're outside of a function, they can be accessed by all code outside of functions, classes, and so on. If a variable is inside a function, only that function can access the variable, and its value is lost when the function returns.

- Global variables area accesible from all parts of your code, whether within or outside of functions.

- Static Variables area accesible only whithin the function that declared them but retain their value over multiple class.
*/

// Global variable
$globalVar = "I am a global variable, accessible from anywhere outside functions unless global keyword is used.";

function testGlobalVar() {
    global $globalVar; // Use global keyword to access the global variable inside this function
    echo $globalVar . "\n";
}

testGlobalVar();

// Local variable
function testLocalVar() {
    $localVar = "I am a local variable, accessible only within this function.";
    echo $localVar . "\n";
}

testLocalVar();

// Static variable
function testStaticVar() {
    static $staticVar = 0; // Static variable, retains its value between function calls
    $staticVar++;
    echo "Static variable value: $staticVar\n";
}

testStaticVar();
testStaticVar(); // The static variable retains its value between calls

// Attempting to access local variable outside its function will cause an error
// echo $localVar; // Uncommenting this line will result in an error