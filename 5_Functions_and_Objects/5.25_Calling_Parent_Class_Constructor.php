<?php
$object = new Tiger();

echo "Tigers have ...\n";
echo "Fur: " . $object -> fur . "\n";
echo "Stripes: " . $object -> stripes . "\n";

class Wildcat {
    public $fur; // Wildcat has fur

    function __construct()
    {
        $this -> fur = "TRUE";
    }
}

class Tiger extends Wildcat {
    public $stripes; // Tiger has srtipes

    function __construct()
    {
        parent::__construct();
        $this -> stripes = "TRUE";
    }
}