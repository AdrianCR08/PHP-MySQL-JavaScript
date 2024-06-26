<?php
require_once "library.php";

echo "This is a test of require_once\n";
// Your code goes here

/*
+--------------+----------------------------------------------------------------------------------+----------------+
| Method       | Description                                                                      | Scope          |
+--------------+----------------------------------------------------------------------------------+----------------+
| include      | Includes and evaluates a specified file. If the file cannot be found, PHP emits  | Global         |
|              | a warning but the script will continue execution.                                |                |
+--------------+----------------------------------------------------------------------------------+----------------+
| include_once | Similar to include, but if the code from a file has already been included, it    | Global         |
|              | will not be included again. It emits a warning if the file cannot be found.      |                |
+--------------+----------------------------------------------------------------------------------+----------------+
| require      | Identical to include, but if the file cannot be found, PHP emits a fatal error,  | Global         |
|              | halting the script execution.                                                    |                |
+--------------+----------------------------------------------------------------------------------+----------------+
| require_once | Similar to require, but checks if the file has already been included, and if so, | Global         |
|              | it won't be included again. It emits a fatal error if the file cannot be found.  |                |
+--------------+----------------------------------------------------------------------------------+----------------+
*/