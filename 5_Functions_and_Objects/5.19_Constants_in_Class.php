<?php
Translate::lookup();

class Translate {
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;
    // ...

    static function lookup (){
        echo self::SPANISH;
        // The :: operator is used to access static properties and methods without needing to instantiate an object.
        // Remember the self keyword is used to access static properties and methods within a class.
        // Remember teh const keyword is used to define a constant.
        // Remember that once declared a constant cannot be changed or undefined.
    }

}