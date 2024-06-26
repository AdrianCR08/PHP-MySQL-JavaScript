<?php
$object = new Son;
$object -> test();
$object -> test2();

class Dad {
    function test () {
        echo "[Class Dad] I am your Father\n";
    }
}

class Son extends Dad {
    function test() {
        echo "[Class Son] Noooooo!\n";

    }
    function test2(){
        parent::test();
    }
}

// If you wish to ensure that your code calls a method from the current class, you can
// use the self keyword, like this:
// self::method();